<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarsController;


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
/* route to display home page */
Route::get('/', function () {
    return view('stars/home');
});
/* route to display create page */
Route::get('/create', function () {
    return view('stars/create');
});
/* route to the starsController */
Route::resource('stars', StarsController::class);

