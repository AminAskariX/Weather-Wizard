# Weather Wizard

[فارسی](#فارسی) · [English](#english)

<a id="فارسی"></a>
## فارسی

افزونهٔ وردپرس برای نمایش دما و وضعیت آب‌وهوا با شورت‌کد.

### امکانات

- شورت‌کد `[weather_wizard city="Tehran"]` با شهر پیش‌فرض تهران.
- دریافت داده از OpenWeatherMap و نمایش دما و وضعیت به کمک jQuery و CSS.
- نمایش نماد ساده برای وضعیت آفتابی، بارانی یا سایر وضعیت‌ها.

### نصب و پیکربندی

فایل‌های این مخزن را در یک پوشه زیر `wp-content/plugins/` قرار دهید و افزونهٔ Weather Wizard را در پیشخوان فعال کنید. در `scripts.js` مقدار نمایشی `YOUR_API_KEY` را با کلید معتبر OpenWeatherMap جایگزین کنید، سپس شورت‌کد را در برگه یا نوشته بگذارید.

### محدودیت فعلی

در این نسخه کلید API داخل JavaScript مرورگر استفاده می‌شود و برای بازدیدکنندگان قابل مشاهده است. برای محیط عملیاتی، درخواست را به سمت سرور منتقل و کلید را ایمن نگه دارید.

### پدیدآورنده و حقوق نشر

© 2025 م.امین عسکری (M. Amin Askari). [GitHub](https://github.com/AminAskariX) · [وب‌سایت](https://aminaskarix.ir)

### مجوز

این پروژه تحت مجوز MIT منتشر شده است؛ متن کامل در [LICENSE](LICENSE) آمده است. عبارت «تمام حقوق محفوظ است» جایگزین شرایط این مجوز نمی‌شود.

<a id="english"></a>
## English

A WordPress shortcode plugin that displays temperature and weather conditions.

### Features

- `[weather_wizard city="Tehran"]` shortcode, defaulting to Tehran.
- OpenWeatherMap request via jQuery, with temperature and weather styling.
- Simple icons for clear, rainy, and other conditions.

### Install and configure

Place these files in a folder under `wp-content/plugins/` and activate Weather Wizard in WordPress. Replace the `YOUR_API_KEY` placeholder in `scripts.js` with an OpenWeatherMap key, then add the shortcode to a post or page.

### Current limitation

This version uses the API key in browser-side JavaScript, where visitors can see it. For production, proxy the request through a server and keep the key private.

### Author and copyright

Copyright © 2025 M. Amin Askari (م.امین عسکری). [GitHub](https://github.com/AminAskariX) · [Website](https://aminaskarix.ir)

### License

This project is licensed under MIT. See [LICENSE](LICENSE) for the full terms.
