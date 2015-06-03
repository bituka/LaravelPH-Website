<?php

use Illuminate\Http\Request;

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

$app->when('*', 'csrf', array('post'));

// makeControllerRoute('/members', 'App\Http\Controllers\MembersController');

//home page
$app->get('/', function() {
    
    return view('public.hello');
});


// members page
$app->get('members', 'App\Http\Controllers\MembersController@index');

// route to show the login form
$app->get('login', 'App\Http\Controllers\HomeController@showLogin');

//route to process the login form
$app->post('login', 'App\Http\Controllers\HomeController@doLogin');
/*
$app->post('login', function(Request $request) {
     if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('dashboard');
    }

});
*/
$app->get('user/{id}', 'App\Http\Controllers\MembersController@showProfile');

// $app->get('user/1', 'App\Http\Controllers\MemebersController@showProfile');