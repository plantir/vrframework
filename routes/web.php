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
// function rest($path, $controller)
// {
// 	global $app;
	
// 	$app->get($path, $controller.'@index');
// 	$app->get($path.'/{id}', $controller.'@show');
// 	$app->post($path, $controller.'@store');
// 	$app->put($path.'/{id}', $controller.'@update');
// 	$app->delete($path.'/{id}', $controller.'@destroy');
// }
// $app->group(['prefix' => 'api'],function () use ($app) {
    /**
    * Routes for resource task
    */
    // $app->get('task', 'TasksController@all');
    // $app->get('task/{id}', 'TasksController@get');
    // $app->post('task', 'TasksController@add');
    // $app->put('task/{id}', 'TasksController@put');
    // $app->delete('task/{id}', 'TasksController@remove');

    /**
    * Routes for resource test
    */
    // $app->get('test',['as' => 'test','uses' => 'TestsController@all']);
    // $app->get('test/{id}',['as' => 'test2','uses' => 'TestsController@get']);
    // $app->post('test', 'TestsController@add');
    // $app->put('test/{id}', 'TestsController@put');
    // $app->delete('test/{id}', 'TestsController@remove');

    // $app->group(['prefix' => 'admin','middleware' => 'auth.basic'],function () use ($app) {
    //     $app->get('test', 'TestsController@all');
    // });
    

// });
use Illuminate\Http\Request;
use App\Model\User;
$app->get('api/post', function (Request $request) {
    
    return User::ListOption($request->all());
});




/**
 * Routes for resource category
 */
// $app->get('category', 'CategoriesController@all');
// $app->get('category/{id}', 'CategoriesController@get');
// $app->post('category', 'CategoriesController@add');
// $app->put('category/{id}', 'CategoriesController@put');
// $app->delete('category/{id}', 'CategoriesController@remove');
