<?php namespace App\Http\Controllers;

// use App\User;
use App\Http\Controllers;
use Illuminate\Http\Request;

class MembersController extends Controller {

    public function index() {
        
        return 'testindex';
        /*
        $app->post('auth/login', function(Request $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            // return redirect('dashboard');
             
            return 'login success';
            }

        });
        */
        // return 'testindex';
    }


}