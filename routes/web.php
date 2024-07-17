<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/register', [UserController::class, 'loadRegister']);
Route::post('/register', [UserController::class, 'studentRegister'])->name('studentRegister');
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/', [UserController::class, 'loadLogin']);
Route::post('/login', [UserController::class, 'userLogin'])->name('userLogin');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route::get('/verification/{id}', [UserController::class, 'verification']);
// Route::post('/verified', [UserController::class, 'verifiedOtp'])->name('verifiedOtp');
Route::get('/dashboard', [UserController::class, 'loadDashboard']);

Route::get('/admin', [UserController::class, 'loadadminLogin']);
Route::post('/admin', [UserController::class, 'adminRegister'])->name('adminRegister');

// Route::get('/resend-otp',[UserController::class,'resendOtp'])->name('resendOtp');

// Route::group(['prefix' => 'admin'], function () {
//     Route::group(['middleware' => 'admin.guest'], function () {
//         Route::view('/login', 'admin.login')->name('admin.login');
//         Route::post('/login', [App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
//     });

//     Route::group(['middleware' => 'admin.auth'], function () {
//         Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('admin.dashboard');
//         Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
//     });
// });
