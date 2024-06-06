<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ContactController;
use App\Http\controllers\HomeController;
use App\Http\controllers\Auth\RegisterController;
use App\Http\controllers\Auth\LoginController;

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
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

route::post('login',[LoginController::class, 'login']);
route::get('logout',[LoginController::class, 'logout']);

route::post('register',[RegisterController::class, 'register']);

route::get('home',[HomeController::class, 'index']);

Route::prefix('contact/')->group(function () {
    route::get('list',[ContactController::class, 'index']);
    route::get('create',[ContactController::class, 'create']);
    route::post('store',[ContactController::class, 'store']);
    route::get('show/{id}',[ContactController::class, 'show']);
    route::get('edit/{id}',[ContactController::class, 'edit']);
    route::post('update',[ContactController::class, 'update']);
    route::get('destroy/{id}',[ContactController::class, 'destroy']);
});
