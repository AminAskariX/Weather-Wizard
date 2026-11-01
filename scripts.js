document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.weather-widget').forEach(async widget => {
    const city = widget.dataset.city;
    const status = widget.querySelector('.weather-status');
    const temperature = widget.querySelector('.temperature');
    const icon = widget.querySelector('.weather-icon');
    try {
      const url = new URL(WeatherWizardConfig.endpoint, window.location.href);
      url.searchParams.set('city', city);
      const response = await fetch(url.toString(), { credentials: 'same-origin' });
      const data = await response.json();
      if (!response.ok) throw Error(data.message || 'دریافت اطلاعات ناموفق بود.');
      temperature.textContent = 'دما: ' + data.temperature + '°C';
      status.textContent = data.condition;
      const kind = data.condition === 'Clear' ? 'sunny' : data.condition === 'Rain' ? 'rainy' : 'cloudy';
      widget.classList.add(kind);
      icon.textContent = kind === 'sunny' ? '☀️' : kind === 'rainy' ? '🌧️' : '☁️';
    } catch (error) {
      status.textContent = error.message || 'مشکلی در دریافت اطلاعات پیش آمد.';
    }
  });
});
