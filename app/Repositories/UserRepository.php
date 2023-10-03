<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class UserRepository
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getAllUsersFromEndpoint()
    {
        try {
            $response = $this->client->get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() === 200) {
                return $data;
            }
        } catch (\Exception $e) {
            
            return null;
        }
    }
}
