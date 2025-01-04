jQuery(document).ready(function($) {
    $('.weather-widget').each(function() {
        const widget = $(this);
        const city = widget.data('city');
        
        // فراخوانی API وضعیت آب‌وهوا
        $.ajax({
            url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=YOUR_API_KEY`,
            method: 'GET',
            success: function(data) {
                const temp = data.main.temp;
                const status = data.weather[0].main;
                
                widget.find('.temperature').text(`دما: ${temp}°C`);
                widget.find('.weather-status').text(status);
                
                if (status === 'Clear') {
                    widget.addClass('sunny');
                    widget.find('.weather-icon').html('☀️');
                } else if (status === 'Rain') {
                    widget.addClass('rainy');
                    widget.find('.weather-icon').html('🌧️');
                } else {
                    widget.addClass('cloudy');
                    widget.find('.weather-icon').html('☁️');
                }
            },
            error: function() {
                widget.find('.weather-status').text('مشکلی در دریافت اطلاعات پیش آمده.');
            }
        });
    });
});
