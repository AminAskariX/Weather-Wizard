# 🌦️ Weather Wizard

[فارسی](#فارسی) · [English](#english)

<a id="فارسی"></a>
## 🇮🇷 فارسی

افزونهٔ وردپرس برای نمایش دما و وضعیت آب‌وهوا با شورت‌کد.

### 🚀 امکانات

- شورت‌کد `[weather_wizard city="Tehran"]` با شهر پیش‌فرض تهران.
- دریافت داده از OpenWeatherMap و نمایش دما و وضعیت به کمک jQuery و CSS.
- نمایش نماد ساده برای وضعیت آفتابی، بارانی یا سایر وضعیت‌ها.

### 🛠️ نصب و پیکربندی

فایل‌های این مخزن را در یک پوشه زیر `wp-content/plugins/` قرار دهید و افزونهٔ Weather Wizard را در پیشخوان فعال کنید. در `scripts.js` مقدار نمایشی `YOUR_API_KEY` را با کلید معتبر OpenWeatherMap جایگزین کنید، سپس شورت‌کد را در برگه یا نوشته بگذارید.

### ⚠️ محدودیت فعلی

در این نسخه کلید API داخل JavaScript مرورگر استفاده می‌شود و برای بازدیدکنندگان قابل مشاهده است. برای محیط عملیاتی، درخواست را به سمت سرور منتقل و کلید را ایمن نگه دارید.

### 💡 جایگاه افزونه

وقتی صفحهٔ وردپرس به یک نمایش خلاصه از هوای یک شهر نیاز دارد، شورت‌کد را در محتوا قرار دهید. PHP ظرف ویجت و نام شهر را تولید می‌کند؛ اسکریپت مرورگر درخواست هواشناسی را می‌فرستد و دما و نماد شرایط را در همان ظرف می‌نویسد. اگر درخواست شکست بخورد، متن خطا در ویجت نشان داده می‌شود.

### 🧩 نقشهٔ فایل‌ها

| فایل | نقش |
| --- | --- |
| `weather-wizard.php` | ثبت افزونه، بارگذاری فایل‌ها و شورت‌کد |
| `scripts.js` | درخواست API و درج نتیجه |
| `styles.css` | ظاهر ویجت |

> 🔎 برای چند ویجت در یک صفحه، اسکریپت هر عنصر `.weather-widget` را جداگانه پردازش می‌کند.

### 👤 پدیدآورنده و حقوق نشر

© م.امین عسکری (M. Amin Askari). [GitHub](https://github.com/AminAskariX) · [وب‌سایت](https://aminaskarix.ir)

### 📜 مجوز

این پروژه تحت مجوز MIT منتشر شده است؛ متن کامل در [LICENSE](LICENSE) آمده است.

<a id="english"></a>
## 🇬🇧 English

A WordPress shortcode plugin that displays temperature and weather conditions.

### 🚀 Features

- `[weather_wizard city="Tehran"]` shortcode, defaulting to Tehran.
- OpenWeatherMap request via jQuery, with temperature and weather styling.
- Simple icons for clear, rainy, and other conditions.

### 🛠️ Install and configure

Place these files in a folder under `wp-content/plugins/` and activate Weather Wizard in WordPress. Replace the `YOUR_API_KEY` placeholder in `scripts.js` with an OpenWeatherMap key, then add the shortcode to a post or page.

### ⚠️ Current limitation

This version uses the API key in browser-side JavaScript, where visitors can see it. For production, proxy the request through a server and keep the key private.

### 💡 Plugin flow

Add the shortcode when a WordPress page needs a compact weather snapshot for a city. PHP renders a widget container and city name; browser-side JavaScript requests weather data and fills the same container with temperature and an icon. A failed request shows an error in the widget.

### 🧩 Repository map

| File | Purpose |
| --- | --- |
| `weather-wizard.php` | Plugin registration, assets, shortcode |
| `scripts.js` | API request and result rendering |
| `styles.css` | Widget appearance |

> 🔎 The script processes each `.weather-widget` element independently when several appear on a page.

### 👤 Author and copyright

Copyright © M. Amin Askari (م.امین عسکری). [GitHub](https://github.com/AminAskariX) · [Website](https://aminaskarix.ir)

### 📜 License

This project is licensed under MIT. See [LICENSE](LICENSE) for the full terms.
