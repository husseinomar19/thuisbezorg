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
Route::get('/menu', 'App\Http\Controllers\PizzaController@index');
Route::get('/massage', 'App\Http\Controllers\AuthController@showmassage');
Route::get('/admin', function () {
    $pageTitle = "Admin";
    return view('admin',compact('pageTitle'));
});
Route::post('/admin', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/contact', 'App\Http\Controllers\AuthController@contact')->name('contact');

Route::post('/toevoegen', 'App\Http\Controllers\PizzaController@store')->name('item.store');
Route::put('/pasmenu/{id}', 'App\Http\Controllers\PizzaController@update')->name('item.update');


Route::get('/dash', function () {
    $pageTitle = "Admin";
    return view('dash', compact('pageTitle'));
});

Route::get('/toevoegen', function () {
    $pageTitle = "Toeveogen";
    return view('toevoegen',compact('pageTitle'));
});
// Route::get('/aanpassen', function () {
//     $pageTitle = "Aanpassen";
//     return view('aanpassen',compact('pageTitle'));
// });
Route::get('/aanpassen/{id}', 'App\Http\Controllers\PizzaController@edit')->name('aanpassen');
Route::get('/verwijderen/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('verwijderen');
Route::get('/up-date', 'App\Http\Controllers\PizzaController@aanpassen');
