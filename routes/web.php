<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bridge', function () {
    $pusher = \Illuminate\Support\Facades\App::make('pusher');

    $pusher->trigger( 'test-channel',
                      'test-event', 
                      ['text' => 'I Love China!!!']
                    );
    return 'This is a Laravel Pusher Bridge Test!';
});
