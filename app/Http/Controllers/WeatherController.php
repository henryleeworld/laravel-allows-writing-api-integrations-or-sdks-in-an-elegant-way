<?php

namespace App\Http\Controllers;

use App\Connectors\RapidAPIConnector;
use App\Requests\GetCurrentWeatherRequest;
use GuzzleHttp\Client;

class WeatherController extends Controller 
{
    public function call() 
    {
        $connector = (new RapidAPIConnector())->withClient(new Client());
        $response = $connector->send(new GetCurrentWeatherRequest());
        echo '即時天氣查詢：' . $response->body() . PHP_EOL;
    }
}
