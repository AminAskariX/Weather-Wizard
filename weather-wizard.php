<?php
/*
Plugin Name: Weather Wizard
Description: یک پلاگین وردپرس برای نمایش وضعیت آب‌وهوا با انیمیشن‌های زیبا و شرت‌کد.
Version: 1.0
Author: M.Amin Askari
*/

function ww_enqueue_scripts() {
    // بارگذاری استایل‌ها و اسکریپت‌ها
    wp_enqueue_style('weather-wizard-style', plugin_dir_url(__FILE__) . 'styles.css');
    wp_enqueue_script('weather-wizard-script', plugin_dir_url(__FILE__) . 'scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ww_enqueue_scripts');

function ww_weather_widget($atts) {
    $atts = shortcode_atts(array(
        'city' => 'Tehran', // مقدار پیش‌فرض شهر
    ), $atts);

    ob_start(); ?>
    <div class="weather-widget" data-city="<?php echo esc_attr($atts['city']); ?>">
        <div class="weather-icon"></div>
        <div class="weather-info">
            <h2 class="city-name"><?php echo esc_html($atts['city']); ?></h2>
            <p class="weather-status">درحال دریافت اطلاعات...</p>
            <p class="temperature"></p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('weather_wizard', 'ww_weather_widget');
