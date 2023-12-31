<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MinatBakatController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\NoLogin;  


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
Route::middleware([NoLogin::class])->group(function () {
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_proses']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'register_prosess']);
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');    

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
});
Route::middleware(['auth'])->group(function () {

Route::get('logout', [AuthController::class, 'logout']);
Route::get('minatbakat',[MinatBakatController::class,'minatbakat']);


});

Route::get('minat_proses',[MinatBakatController::class,'minat_proses']);
Route::get('pembelian',[MinatBakatController::class,'pembelian']);

Route::get('/',[HomeController::class,'index']);
Route::get('dashboard',[HomeController::class,'dashboard']);

Route::post('proses',[MinatBakatController::class,'proses']);
// Route::get('soal1',[SoalController::class,'view1']);
// Route::get('soal2',[SoalController::class,'view2']);
Route::get('jurusan',[JurusanController::class,'jurusan']);
Route::get('kampuss1',[JurusanController::class,'kampuss1']);
Route::get('kampusd4',[JurusanController::class,'kampusd4']);
Route::get('kampusd3',[JurusanController::class,'kampusd3']);

Route::get('soal',[SoalController::class,'soal']);
Route::post('soal',[SoalController::class,'soal_proses']);
Route::post('soal1',[SoalController::class,'soal1_proses']);
Route::post('soal2',[SoalController::class,'soal2_proses']);
Route::post('soal3',[SoalController::class,'soal3_proses']);
Route::get('soal1',[SoalController::class,'soal1']);
Route::get('soal2',[SoalController::class,'soal2']);
Route::get('soal3',[SoalController::class,'soal3']);


Route::get('user', [AuthController::class, 'user']);
Route::get('hapus_penerima/{id}', [AuthController::class, 'hapus_penerima']);
Route::get('aktivasi/{id}', [AuthController::class, 'aktivasi']);
Route::get('mati/{id}', [AuthController::class, 'mati']);


Route::post('bayar',[MinatBakatController::class,'bayar']);
Route::get('minat',[MinatBakatController::class,'minat']);
Route::post('minat',[MinatBakatController::class,'minat_proses']);

