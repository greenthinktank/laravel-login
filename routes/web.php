<?php

use Illuminate\Support\Facades\Route;

// 追加
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');

/**
 *ログインの処理
 */
Route::get('login', [AuthController::class, 'login'])->name('login');
