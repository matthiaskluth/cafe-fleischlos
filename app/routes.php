<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Models
Route::model('user', 'User');

Route::group(array('prefix' => 'api'), function() {
    Route::get('profile/{user}', function(User $user) {
        return Response::json($user);
    });
});

