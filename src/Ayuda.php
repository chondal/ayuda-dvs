<?php

namespace Chondal\AyudaDvs;

use GuzzleHttp\Client;

class Ayuda
{
    

    private $client;
    private $timeout = 2.0;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => config('ayuda-dvs.base_uri') . config('ayuda-dvs.key_dvs').'/',
            // You can set any number of default request options.
            'timeout' => $this->timeout,
        ]);
    }

    /**
     * Obtener Recursos por GET
     *
     * @param [type] $resource
     * @return void
     */
    public function get($resource = null)
    {

        $response = $this->client->request('GET', $resource);
        $respuestaFinal = json_decode($response->getBody()->getContents());

        return $respuestaFinal;
    }

}
