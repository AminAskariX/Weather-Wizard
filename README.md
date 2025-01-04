📄 README (English)
🌦️ Weather Wizard
A lightweight WordPress plugin for displaying real-time weather updates using a simple API and CSS animations.

✨ Features
Fetch real-time weather data from an API.
Animated weather status (Sunny ☀️, Rainy 🌧️, Cloudy ☁️) using CSS.
Custom shortcode for easy embedding in posts, pages, or widgets.
Simple and intuitive user interface.
⚙️ Installation
Download the plugin files or ZIP.
Upload to your WordPress site via Plugins > Add New > Upload Plugin or place the unzipped folder into /wp-content/plugins/.
Activate the plugin.
Use the shortcode [weather_wizard city="CityName"] anywhere on your site.
🔑 How to Get Your API Key (OpenWeatherMap)
To fetch live weather data, you'll need an API key from OpenWeatherMap. Follow these steps:

🌐 Visit the Website:
Go to OpenWeatherMap's website.

📝 Sign Up:
Create a free account if you don't already have one.

➡️ Log In:
After logging in, navigate to the API Keys section in your account dashboard.

➕ Create a New API Key:

Click the Generate Key button.
Give your API key a name (e.g., "Weather Wizard").
Copy the generated API key.
🔄 Update the Plugin:
Open the scripts.js file and replace YOUR_API_KEY with your actual API key:

javascript
Copy code
url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=YOUR_API_KEY`,
🛠️ Folder Structure
graphql
Copy code
weather-wizard/
├── weather-wizard.php     # Main plugin file
├── styles.css             # CSS animations and styles
├── scripts.js             # JavaScript for API requests and UI updates
💡 Usage
Use the shortcode [weather_wizard city="CityName"] to display the weather widget.
Replace "CityName" with the desired location (e.g., [weather_wizard city="Tehran"]).
👨‍💻 Developer
Name: M.Amin Askari
Websites: Microservice.ir | Metacortex.ir
📄 README (فارسی)
🌦️ Weather Wizard
افزونه‌ای سبک برای نمایش وضعیت آب‌وهوا با استفاده از API و انیمیشن‌های CSS.

✨ ویژگی‌ها
دریافت وضعیت آب‌وهوا به‌صورت لحظه‌ای از API.
نمایش انیمیشن‌های وضعیت هوا (آفتابی ☀️، بارانی 🌧️، ابری ☁️).
شرت‌کد اختصاصی برای استفاده در پست‌ها، صفحات یا ابزارک‌ها.
رابط کاربری ساده و زیبا.
⚙️ نصب
فایل‌های افزونه را دانلود کنید.
در وردپرس از بخش افزونه‌ها > افزودن > بارگذاری افزونه، فایل ZIP را آپلود کنید یا پوشه را در مسیر /wp-content/plugins/ کپی کنید.
افزونه را فعال کنید.
از شرت‌کد [weather_wizard city="نام_شهر"] برای نمایش ویجت استفاده کنید.
🔑 نحوه دریافت API Key از OpenWeatherMap
برای دریافت اطلاعات وضعیت آب‌وهوا، نیاز به یک API Key دارید. مراحل زیر را دنبال کنید:

🌐 بازدید از سایت:
به سایت OpenWeatherMap بروید.

📝 ایجاد حساب کاربری:
یک حساب کاربری رایگان بسازید.

➡️ ورود به حساب کاربری:
پس از ورود به سایت، به بخش API Keys در پنل کاربری خود بروید.

➕ ایجاد کلید جدید:

روی دکمه Generate Key کلیک کنید.
یک نام برای کلید خود انتخاب کنید (مثلاً "Weather Wizard").
کلید تولید شده را کپی کنید.
🔄 بروزرسانی افزونه:
فایل scripts.js را باز کرده و مقدار YOUR_API_KEY را با کلید واقعی جایگزین کنید:

javascript
Copy code
url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=YOUR_API_KEY`,
🛠️ ساختار پوشه
bash
Copy code
weather-wizard/
├── weather-wizard.php     # فایل اصلی افزونه
├── styles.css             # استایل‌ها و انیمیشن‌ها
├── scripts.js             # جاوااسکریپت برای درخواست‌های API و بروزرسانی UI
💡 نحوه استفاده
از شرت‌کد [weather_wizard city="نام_شهر"] برای نمایش ویجت استفاده کنید.
نام شهر موردنظر خود را جایگزین کنید (مثلاً [weather_wizard city="Tehran"]).
👨‍💻 توسعه‌دهنده
نام: M.Amin Askari
وب‌سایت‌ها: Microservice.ir | Metacortex.ir
🎉 With these enhancements, your README is now ready for GitHub and provides clear instructions for developers and users alike!
