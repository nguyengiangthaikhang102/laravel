<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RFIDController;
use App\Http\Controllers\EmailController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/checkin',[RFIDController::class,'index'])->middleware(['auth']);
Route::post('checkin',[RFIDController::class,'checkin'])->middleware(['auth'])->name('checkin');
Route::get('/checkout',[RFIDController::class,'out'])->middleware(['auth']);
Route::post('checkout',[RFIDController::class,'checkout'])->middleware(['auth'])->name('checkout');

Route::get('/search',[RFIDController::class,'search'])->middleware(['auth']);


Route::get('export', [RFIDController::class,'export'])->middleware(['auth']);

Route::get('camera',[RFIDController::class,'photo'])->middleware(['auth']);
//email
Route::get('email',[EmailController:: class,'index'])->middleware(['auth'])->name('email');
Route::post('email/send',[EmailController:: class,'send'])->middleware(['auth'])->name('send');
