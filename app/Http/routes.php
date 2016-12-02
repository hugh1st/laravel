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
Route::get('/', function () {
    return "Hello World";
//     return view('welcome');
});

Route::get('bridge', function () {
//     $pusher = \Illuminate\Support\Facades\App::make('pusher');

//     $pusher->trigger( 'test-channel',
//                       'test-event', 
//                       ['text' => 'I Love China!!!']
//                     );
    return 'This is a Laravel Pusher Bridge Test!';
});