# 🌦️ Weather Wizard

[فارسی](#فارسی) · [English](#english)

<a id="فارسی"></a>
## 🇮🇷 فارسی

افزونهٔ وردپرس برای نمایش آب‌وهوای شهر انتخابی در نوشته یا برگه. درخواست OpenWeatherMap از سرور وردپرس ارسال می‌شود و کلید API به مرورگر فرستاده نمی‌شود.

### 🚀 امکانات

- شورت‌کد `[weather_wizard city="Tehran"]`؛ شهر پیش‌فرض تهران است.
- صفحهٔ تنظیمات در «تنظیمات ← Weather Wizard» برای ثبت کلید API.
- اعتبارسنجی نام شهر، محدودیت درخواست‌های بدون کش و کش ۱۰ دقیقه‌ای هر شهر.
- نمایش دما، وضعیت و نماد ساده برای هر ویجت؛ خطای API در همان ویجت نشان داده می‌شود.

### 🛠️ نصب و راه‌اندازی

فایل‌های مخزن را در پوشهٔ `wp-content/plugins/weather-wizard/` بگذارید و افزونه را فعال کنید. از [OpenWeatherMap](https://openweathermap.org/) کلید معتبر بگیرید و آن را در صفحهٔ تنظیمات افزونه ثبت کنید. سپس شورت‌کد را در نوشته یا برگه قرار دهید.

### 🔒 امنیت و محدودیت

کلید فقط در تنظیمات سرور نگه داشته می‌شود. مسیر REST عمومی است چون بازدیدکنندگان باید بتوانند هوا را ببینند؛ کش و محدودیت ۳۰ درخواست جدید در ۱۰ دقیقه برای هر IP مصرف API را کاهش می‌دهد. سرویس خارجی، اتصال اینترنت و کلید معتبر لازم‌اند؛ محدودیت نرخ یا قطعی OpenWeatherMap می‌تواند نتیجه را تحت تأثیر قرار دهد.

### 👤 پدیدآورنده

طراحی و برنامه‌نویسی: م. امین عسکری | [AminAskariX.ir](https://aminaskarix.ir)

### 📜 مجوز

MIT؛ متن کامل در [LICENSE](LICENSE).

<a id="english"></a>
## 🇬🇧 English

A WordPress shortcode plugin for displaying a city's weather in a post or page. WordPress requests OpenWeatherMap on the server, so the API key is not sent to visitors' browsers.

### 🚀 Features

- `[weather_wizard city="Tehran"]` shortcode, defaulting to Tehran.
- Settings → Weather Wizard page for the API key.
- City validation, per-IP uncached request limit, and ten-minute per-city cache.
- Temperature, condition, simple icon, and in-widget errors.

### 🛠️ Install and configure

Place the files under `wp-content/plugins/weather-wizard/`, activate the plugin, obtain a valid [OpenWeatherMap](https://openweathermap.org/) key, and save it in plugin settings. Add the shortcode to a post or page.

### 🔒 Security and limitations

The key stays in server-side settings. The REST route is public so visitors can load weather; caching and a 30-uncached-request-per-10-minute per-IP limit reduce API consumption. The external service, internet access, and valid key are still required.

### 👤 Author

Design and development: M. Amin Askari | [AminAskariX.ir](https://aminaskarix.ir)

### 📜 License

MIT; see [LICENSE](LICENSE).
