<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::group([
    'middleware' => ['auth', 'role:admin,user'],
], function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    route::group([
        'middleware' => 'role:admin'
    ], function () {

        Route::resource('/kategori', KategoriController::class);
    });

    Route::group([
        'middleware' => 'role:user'
    ], function () {
        //
    });
});

