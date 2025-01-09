<?php

namespace App\Http\Controllers;

use App\Http\Integrations\RapidAPI\Connectors\RapidAPIConnector;
use App\Http\Integrations\RapidAPI\Requests\GetCurrentWeatherRequest;
use GuzzleHttp\Client;

class WeatherController extends Controller 
{
    public function call() 
    {
        $connector = (new RapidAPIConnector())->withClient(new Client());
        $response = $connector->send(new GetCurrentWeatherRequest());
        echo __('Real-time weather query:') . $response->body() . PHP_EOL;
    }
}
