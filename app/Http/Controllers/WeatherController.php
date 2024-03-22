<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $location = $request->input('location');
        $apiKey = '2bb82a75d11c4e23a4424857242203';

        // Retrieve weather data using the WeatherAPI
        $weatherUrl = "https://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}&aqi=no";
        $client = new \GuzzleHttp\Client();
        $weatherResponse = $client->get($weatherUrl);
        $weatherData = json_decode($weatherResponse->getBody(), true);

        if (isset($weatherData['location'])) {
            return view('weather', [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'location' => $weatherData['location']['name'],
                'weather' => $weatherData['current']['condition']['text'],
                'temperature' => $weatherData['current']['temp_c'],
            ]);
        } else {
            return back()->withErrors(['location' => 'Unable to find the specified location.']);
        }
    }
}
