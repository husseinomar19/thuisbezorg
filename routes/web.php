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
    $pageTitle = "Home";
    return view('welcome',compact('pageTitle'));
});
Route::get('/about', function () {
    $pageTitle = "About";
    return view('about',compact('pageTitle'));
});
Route::get('/contact', function () {
    $pageTitle = "Contact";
    return view('contact',compact('pageTitle'));
});
Route::get('/menu', function () {
    $pageTitle = "Menu";
    return view('menu',compact('pageTitle'));
});
Route::get('/admin', function () {
    $pageTitle = "Admin";
    return view('admin',compact('pageTitle'));
});
Route::post('/login', 'AuthController@login')->name('login');

Route::post('/toevoegen', 'App\Http\Controllers\PizzaController@store')->name('item.store');

Route::get('/dash', function () {
    $pageTitle = "Admin";
    return view('dash',compact('pageTitle'));
});
Route::get('/toevoegen', function () {
    $pageTitle = "Toeveogen";
    return view('toevoegen',compact('pageTitle'));
});
Route::get('/aanpassen', function () {
    $pageTitle = "Aanpassen";
    return view('aanpassen',compact('pageTitle'));
});