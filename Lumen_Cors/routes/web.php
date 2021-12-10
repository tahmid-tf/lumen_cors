<?php


use Illuminate\Http\Response;


$router->group(['middleware' => 'cors'], function () use ($router) {

    // example code

    $router->get('/', function () {
       return response()->json([
           "data" => "test",
           "status" => Response::HTTP_ACCEPTED
       ]);
    });
});
