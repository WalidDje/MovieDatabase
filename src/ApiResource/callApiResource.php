<?php

namespace App\ApiResource;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class callApiResource 
{

    public function __construct(
        private HttpClientInterface $client,
    ) {
        $this->client = $client;
    }

    public function getAllData(): array
    {
        return $this->getMovieData('allApiData');
    }

    public function getMovieData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/550?api_key=8f8ae21738809216fa94e62e4ac1c82a'
        );

        return $response->toArray();
    }
}