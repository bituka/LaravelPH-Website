<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



$app->get('/', function() {
    
    return view('public.hello');
});

// $app->get('members', 'App\Http\Controllers\MembersController@index');


// $app->get('user/1', 'App\Http\Controllers\MemebersController@showProfile');