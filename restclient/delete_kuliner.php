<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
$id = $_GET['id'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('DELETE','/api/kuliner',[ //post
    'json' => [
        'id' => $id,
        
    ]
]);

$body = $response->getBody();
header('location:kuliner.php') 

?>