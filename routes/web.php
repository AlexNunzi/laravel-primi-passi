<?php

use Illuminate\Support\Facades\Route;

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

    $hello = 'Hello World!';

    $data = ['hello' => $hello];

    return view('home', $data);
})->name('mainPage');

Route::get('bonus', function() {
    $bonus = 'This is a bonus page!';

    $data = ['bonus' => $bonus];

    return view('bonus', $data);
})->name('bonusPage');

Route::get('extra', function() {
    $extra = 'This is an extra page!';

    $data = [
        'extra' => $extra,
        'listDummies' => ['uno', 'due', 'tre', 'quatro']
    ];

    return view('extra', $data);
})->name('extraPage');
