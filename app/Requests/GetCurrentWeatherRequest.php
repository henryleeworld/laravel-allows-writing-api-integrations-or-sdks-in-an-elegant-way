<?php

namespace App\Requests;

use Fansipan\Request;

class GetCurrentWeatherRequest extends Request
{
    public function method(): string
    {
        return 'GET';
    }

    public function endpoint(): string
    {
        return '/current.json';
    }

    protected function defaultHeaders(): array
    {
        return [
            'X-RapidAPI-Host' => config('services.rapid_api.host'),
            'X-RapidAPI-Key' => config('services.rapid_api.key'),
        ];
    }

    protected function defaultQuery(): array
    {
        return [
            'q' => '53.1%2C-0.13',
        ];
    }
}
