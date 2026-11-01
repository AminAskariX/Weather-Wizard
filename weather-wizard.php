<?php
/*
Plugin Name: Weather Wizard
Description: نمایش وضعیت آب‌وهوا با شورت‌کد و درخواست امن سمت سرور.
Version: 1.1.0
Copyright: (c) M. Amin Askari
Author: M. Amin Askari
*/
if (!defined('ABSPATH')) { exit; }

add_action('admin_init', function () {
    register_setting('ww_settings', 'ww_api_key', [
        'sanitize_callback' => function ($value) {
            $value = sanitize_text_field($value);
            return $value === '' ? get_option('ww_api_key', '') : $value;
        },
    ]);
});
add_action('admin_menu', function () {
    add_options_page('Weather Wizard', 'Weather Wizard', 'manage_options', 'weather-wizard', function () {
        if (!current_user_can('manage_options')) return;
        echo '<div class="wrap"><h1>Weather Wizard</h1><form method="post" action="options.php">';
        settings_fields('ww_settings');
        echo '<p><label for="ww_api_key">کلید API سرویس OpenWeatherMap</label></p>';
        echo '<input id="ww_api_key" name="ww_api_key" type="password" class="regular-text" autocomplete="new-password" value="" placeholder="';
        echo get_option('ww_api_key', '') ? 'کلید ذخیره شده است' : 'کلید را وارد کنید';
        echo '"><p>فیلد خالی، کلید قبلی را نگه می‌دارد. کلید در HTML عمومی نمایش داده نمی‌شود.</p>';
        submit_button();
        echo '</form></div>';
    });
});
add_action('rest_api_init', function () {
    register_rest_route('weather-wizard/v1', '/current', [
        'methods' => 'GET',
        'callback' => 'ww_current_weather',
        'permission_callback' => '__return_true',
    ]);
});
function ww_current_weather($request) {
    $city = trim(sanitize_text_field($request->get_param('city')));
    if (!preg_match("/^[\\p{L}\\p{N} .,'-]{1,80}$/u", $city)) {
        return new WP_Error('ww_city', 'نام شهر نامعتبر است.', ['status' => 400]);
    }
    $key = get_option('ww_api_key', '');
    if (!$key) return new WP_Error('ww_config', 'کلید سرویس تنظیم نشده است.', ['status' => 503]);
    $cache_key = 'ww_' . substr(hash('sha256', $city . '|' . $key), 0, 32);
    $cached = get_transient($cache_key);
    if ($cached !== false) return rest_ensure_response($cached);
    $client = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
    $limit_key = 'ww_rl_' . substr(hash('sha256', $client), 0, 32);
    $requests = (int) get_transient($limit_key);
    if ($requests >= 30) return new WP_Error('ww_limit', 'درخواست‌های زیادی ارسال شده است.', ['status' => 429]);
    set_transient($limit_key, $requests + 1, 10 * MINUTE_IN_SECONDS);
    $url = add_query_arg(['q' => $city, 'units' => 'metric', 'appid' => $key],
        'https://api.openweathermap.org/data/2.5/weather');
    $response = wp_safe_remote_get($url, ['timeout' => 8]);
    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
        return new WP_Error('ww_upstream', 'دریافت وضعیت آب‌وهوا ناموفق بود.', ['status' => 502]);
    }
    $data = json_decode(wp_remote_retrieve_body($response), true);
    if (!isset($data['main']['temp'], $data['weather'][0]['main'])) {
        return new WP_Error('ww_response', 'پاسخ سرویس نامعتبر است.', ['status' => 502]);
    }
    $result = [
        'city' => $city,
        'temperature' => round((float) $data['main']['temp'], 1),
        'condition' => sanitize_text_field($data['weather'][0]['main']),
    ];
    set_transient($cache_key, $result, 10 * MINUTE_IN_SECONDS);
    return rest_ensure_response($result);
}
function ww_weather_widget($atts) {
    $atts = shortcode_atts(['city' => 'Tehran'], $atts, 'weather_wizard');
    wp_enqueue_style('weather-wizard-style', plugin_dir_url(__FILE__) . 'styles.css', [], '1.1.0');
    wp_enqueue_script('weather-wizard-script', plugin_dir_url(__FILE__) . 'scripts.js', [], '1.1.0', true);
    wp_localize_script('weather-wizard-script', 'WeatherWizardConfig',
        ['endpoint' => esc_url_raw(rest_url('weather-wizard/v1/current'))]);
    return '<div class="weather-widget" data-city="' . esc_attr($atts['city']) . '">' .
        '<div class="weather-icon"></div><div class="weather-info"><h2 class="city-name">' .
        esc_html($atts['city']) . '</h2><p class="weather-status">در حال دریافت...</p>' .
        '<p class="temperature"></p></div></div>';
}
add_shortcode('weather_wizard', 'ww_weather_widget');
