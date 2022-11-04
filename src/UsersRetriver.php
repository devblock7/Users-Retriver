<?php

namespace Theo\UsersRetriver;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UsersRetriver
{

    public function getSingleUser(int $userId)
    {
        $client = new Client([
            'base_uri' => 'https://reqres.in'
        ]);
        try {
            $response = $client->request(
                method: 'GET',
                uri: '/api/users/'. $userId,
            );

            $body = json_decode($response->getBody(), true);

        return ($body['data']);
        } catch (GuzzleException $e) {

            return response()->json([
                'error' => $e->getMessage(),
            ], status: 500);
        }
    }
    public function getUsersList(int $pageNumber)
    {

        $client = new Client([
            'base_uri' => 'https://reqres.in'
        ]);

        try {
            $response = $client->request(
                method: 'GET',
                uri: '/api/per_page=1?page='. $pageNumber,
            );

            $body = json_decode($response->getBody(), true);

        return ($body['data']);
        } catch (GuzzleException $e) {

            return response()->json([
                'error' => $e->getMessage(),
            ], status: 500);
        }


    }
}
