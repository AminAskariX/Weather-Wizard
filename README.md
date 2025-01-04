# 🌦️ Weather Wizard

**A lightweight WordPress plugin for displaying real-time weather updates using a simple API, along with beautiful CSS animations. Easily embed the weather widget anywhere on your website using a custom shortcode.**

---

## 🌟 Features

- Fetches weather data in real-time from an API.
- Animated weather conditions (Sunny, Rainy, Cloudy) using CSS.
- Simple and customizable shortcode to display the weather widget anywhere.
- Clean and user-friendly interface for better engagement.

---

## 🚀 Installation

### 1. Manual Installation via FTP or File Manager:
1. Download the latest release of the plugin from the repository as a ZIP file.
2. Extract the `weather-wizard` folder from the ZIP file.
3. Upload the folder to your WordPress installation under the following path:  
   `/wp-content/plugins/`
4. Go to the **Plugins** menu in the WordPress admin panel and activate the plugin.

### 2. Installation via WordPress Admin:
1. Download the plugin as a ZIP file.
2. Log in to your WordPress admin panel.
3. Navigate to **Plugins > Add New** and click the **Upload Plugin** button.
4. Select the `weather-wizard.zip` file and click **Install Now**.
5. Once the installation is complete, click **Activate Plugin**.

---

## 📝 Usage

To display the weather widget on your WordPress website, use the shortcode:

```[weather_wizard city="CityName"]```

- Replace `"CityName"` with the name of the city for which you want to display weather data.  
  Example: `[weather_wizard city="New York"]`.

- Add the shortcode to any post, page, or widget area.

---

## 🔑 How to Get Your API Key

To fetch weather data, you need an API key from OpenWeatherMap. Follow these steps:

### 🌐 Step 1: Create an OpenWeatherMap Account
1. Go to [OpenWeatherMap](https://openweathermap.org/) and click on the **Sign Up** button.
2. Fill in the required fields and complete your registration.

### 🔒 Step 2: Log in to Your Dashboard
1. Once registered, log in to your OpenWeatherMap account.
2. Navigate to the **API Keys** section in your dashboard.

### ✨ Step 3: Generate an API Key
1. Click on the **Create Key** button.
2. Enter a name for your key (e.g., "Weather Wizard Plugin").
3. Copy the generated API key.

### 🔧 Step 4: Replace `YOUR_API_KEY`
1. Open the `scripts.js` file in your plugin folder.
2. Find the following line:

   ```javascript
   url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=YOUR_API_KEY`,
   ```
3. Replace `YOUR_API_KEY` with the API key you copied.
4. Save the file and re-upload it if necessary.

---

## 📂 Folder Structure

```
weather-wizard/
├── weather-wizard.php     # Main plugin file
├── styles.css             # CSS animations and styles
├── scripts.js             # JavaScript file to fetch and display weather data
```

---

## 👨‍💻 Developer Information

- **Developer:** M.Amin Askari  
- **Support Websites:** [Microservice.ir](https://microservice.ir) | [Metacortex.ir](https://metacortex.ir)

---

## ⚖️ License

This project is licensed under the MIT License. For more details, see the `LICENSE` file.

---

## 🤝 Contribution

We welcome contributions from the community! To contribute:
1. Fork the repository.
2. Create a new branch: `git checkout -b feature-name`.
3. Make changes and test thoroughly.
4. Submit a pull request with a detailed description of the changes.

---

# 🌦️ ویزارد آب‌وهوا

**یک افزونه سبک وردپرس برای نمایش وضعیت آب‌وهوا به‌صورت لحظه‌ای با استفاده از API و انیمیشن‌های زیبا. به‌راحتی ویجت وضعیت آب‌وهوا را در هر جایی از سایت خود با استفاده از شرت‌کد اختصاصی قرار دهید.**

---

## 🌟 ویژگی‌ها

- دریافت اطلاعات آب‌وهوا به‌صورت لحظه‌ای از طریق API.
- انیمیشن‌های CSS برای وضعیت آب‌وهوا (آفتابی، بارانی، ابری).
- شرت‌کد ساده و قابل تنظیم برای نمایش ویجت در هر بخشی از سایت.
- رابط کاربری زیبا و ساده برای جذب بیشتر کاربران.

---

## 🚀 نصب

### 1. نصب دستی از طریق FTP یا مدیریت فایل:
1. آخرین نسخه افزونه را از مخزن به‌صورت فایل ZIP دانلود کنید.
2. پوشه `weather-wizard` را از فایل ZIP استخراج کنید.
3. پوشه را به محل زیر در وردپرس خود آپلود کنید:  
   `/wp-content/plugins/`
4. به منوی **افزونه‌ها** در پنل مدیریت وردپرس بروید و افزونه را فعال کنید.

### 2. نصب از طریق پیشخوان وردپرس:
1. فایل افزونه را به‌صورت ZIP دانلود کنید.
2. وارد پنل مدیریت وردپرس خود شوید.
3. به **افزونه‌ها > افزودن** بروید و روی دکمه **بارگذاری افزونه** کلیک کنید.
4. فایل `weather-wizard.zip` را انتخاب کرده و روی **نصب** کلیک کنید.
5. پس از اتمام نصب، روی **فعال‌سازی افزونه** کلیک کنید.

---

## 📝 نحوه استفاده

برای نمایش ویجت وضعیت آب‌وهوا در سایت وردپرس خود از شرت‌کد زیر استفاده کنید:

```[weather_wizard city="نام_شهر"]```

- `"نام_شهر"` را با نام شهری که می‌خواهید وضعیت آب‌وهوا را نمایش دهید جایگزین کنید.  
  مثال: `[weather_wizard city="Tehran"]`.

- شرت‌کد را در هر بخش از سایت، مانند نوشته‌ها، صفحات یا ویجت‌ها قرار دهید.

---

## 🔑 نحوه دریافت کلید API

برای دریافت اطلاعات آب‌وهوا، به یک کلید API از OpenWeatherMap نیاز دارید. مراحل زیر را دنبال کنید:

### 🌐 مرحله 1: ایجاد حساب کاربری در OpenWeatherMap
1. به [OpenWeatherMap](https://openweathermap.org/) بروید و روی دکمه **Sign Up** کلیک کنید.
2. اطلاعات خواسته‌شده را تکمیل کرده و ثبت‌نام کنید.

### 🔒 مرحله 2: ورود به داشبورد
1. پس از ثبت‌نام، وارد حساب کاربری خود در OpenWeatherMap شوید.
2. به بخش **API Keys** در داشبورد خود بروید.

### ✨ مرحله 3: ایجاد کلید API
1. روی دکمه **Create Key** کلیک کنید.
2. یک نام برای کلید خود وارد کنید (مثلاً "Weather Wizard Plugin").
3. کلید تولیدشده را کپی کنید.

### 🔧 مرحله 4: جایگزینی `YOUR_API_KEY`
1. فایل `scripts.js` را در پوشه افزونه خود باز کنید.
2. خط زیر را پیدا کنید:

   ```javascript
   url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=YOUR_API_KEY`,
   ```
3. مقدار `YOUR_API_KEY` را با کلید API کپی‌شده جایگزین کنید.
4. فایل را ذخیره کرده و در صورت نیاز مجدداً آپلود کنید.

---

## 📂 ساختار فایل‌ها

```
weather-wizard/
├── weather-wizard.php     # فایل اصلی افزونه
├── styles.css             # انیمیشن‌ها و استایل‌های CSS
├── scripts.js             # فایل جاوااسکریپت برای دریافت و نمایش اطلاعات آب‌وهوا
```

---

## 👨‍💻 اطلاعات توسعه‌دهنده

- **توسعه‌دهنده:** م.امین عسکری 
- **سایت‌های پشتیبان:** [Microservice.ir](https://microservice.ir) | [Metacortex.ir](https://metacortex.ir)

---

## ⚖️ مجوز

این پروژه تحت مجوز MIT منتشر شده است. برای اطلاعات بیشتر به فایل `LICENSE` مراجعه کنید.

---

## 🤝 همکاری

من از همکاری جامعه برنامه نویسان استقبال می‌کنم! برای همکاری: با [بخش تماس این لینک](https://metacortex.ir) در ارتباط باشید.😊
1

