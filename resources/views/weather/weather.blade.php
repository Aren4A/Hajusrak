<!DOCTYPE html>
<html>
<head>
    <title>Ilmateade</title>
</head>
<body>
    <h1>Hetke ilm {{ $weatherData['name'] }}</h1>
    @if (isset($weatherData['weather'][0]['icon']))
            <img src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="Weather Icon">
        @endif
    <p>Kirjeldus: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Temperatuur: {{ $weatherData['main']['temp'] }} &#8451;</p>
    <!-- Additional weather data can be displayed as per the API response -->
</body>
</html>