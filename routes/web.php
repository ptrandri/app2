<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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
Route::get('/', function () {
    return view('page.home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('page.about', [
        'title' => 'About',
        "name" => 'Andri Putra',
        "email" => 'ptrandri@hotmail.com'
    ]);
});

Route::get('/blogs', function () {
    return view('page.posts', [
        'title' => 'Posts'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);