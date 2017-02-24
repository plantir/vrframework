<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/api/new-path',function() use($app){
    return response()->json(['name' => 'api', 'state' => 'CA']);

});
$app->get('/api/user',function() use($app){
    return response()->json(['name' => 'Abigail', 'state' => 'CA']);

});
$app->get('/', function () use ($app) {
    return view('index',['title'=>'armin']);
    // return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});
$app->get('/path', function () use ($app) {
    return 'Hello';
    // return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});