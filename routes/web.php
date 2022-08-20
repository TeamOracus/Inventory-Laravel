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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('{any}', function () {
    return view('index'); // or wherever your React app is bootstrapped.
})->where('any', '.*');

Route::get('/{path?}', function () {
    return view('index');
});
Route::get('/{locale}/{path?}', function () {
    return view('index');
});
Route::get('{locale}/{path?}/{params?}', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
