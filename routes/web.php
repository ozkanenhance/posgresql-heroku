<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return (new App\Http\Controllers\Users\UserController())->userList();
});

Route::post('/user', function () {
    return (new App\Http\Controllers\Users\UserController())->addUser();
});
