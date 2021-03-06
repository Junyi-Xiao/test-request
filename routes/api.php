<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$router = app('api.router');
$router->version('v1', [
    'namespace'  => 'App\Http\Controllers\Api',
    'middleware' => \App\Http\Middleware\TestMiddleware::class,
], function (\Dingo\Api\Routing\Router $router) {
    $router->get('test/request', 'TestController@testRequest');
});
