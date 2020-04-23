<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('good1/{n}/{p}', 'Controller_Site@get_new_Good');

Route::get('users/create', 'Controller_Site@get_new_User');
Route::post('users', 'Controller_Site@create_User');
