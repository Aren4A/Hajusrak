<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $cacheKey = 'weather_data';

        $apiKey = config('services.weather.key');
        // Create a new Guzzle client instance
        $client = new Client();

        // API endpoint URL with your desired location and units (e.g., London, Metric units)
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Kuressaare&units=metric&appid={$apiKey}";

        try {
            if (Cache::has($cacheKey)) {
                $weatherData = Cache::get($cacheKey);
            } else {
                // Make a GET request to the OpenWeather API
                $response = $client->get($apiUrl);

                // Get the response body as an array
                $data = json_decode($response->getBody(), true);
                Cache::put($cacheKey, $data, now()->addHour());
            }

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            return view('weather/weather', ['weatherData' => $weatherData]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('weather/api_error', ['error' => $e->getMessage()]);
        }
    }
}
