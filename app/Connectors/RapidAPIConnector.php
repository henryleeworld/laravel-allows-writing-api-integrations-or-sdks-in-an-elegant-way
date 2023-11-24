<?php

namespace App\Connectors;

use Fansipan\Contracts\ConnectorInterface;
use Fansipan\Traits\ConnectorTrait;
use Fansipan\Request;
use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

final class RapidAPIConnector implements ConnectorInterface
{
    use ConnectorTrait;

    private $token;

    public function __construct()
    {
    }

    public static function baseUri(): ?string
    {
        return 'https://' . config('services.rapid_api.host');
    }

    public function defaultClient(): ClientInterface
    {
        return new Client([
            'timeout' => 10,
            'headers' => [
                'X-RapidAPI-Host' => config('services.rapid_api.host'),
                'X-RapidAPI-Key'  => config('services.rapid_api.key'),
            ],
        ]);
    }
}
