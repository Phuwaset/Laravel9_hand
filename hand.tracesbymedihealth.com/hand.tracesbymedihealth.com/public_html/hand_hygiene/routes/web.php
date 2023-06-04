<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Insert_Contorller;
use App\Http\Controllers\TimesController;
use App\Http\Controllers\insert_time;
use App\Http\Controllers\darshboad_controll;
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
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

///test
Route::get('/dashboard', function () {
    $sql = "SELECT SUM(times) FROM transection";
    $data = DB::select($sql);
    return view('dashboard', compact('data'));
});


Route::get('/insert', [Insert_Contorller::class, 'InsertView'])->name('next_insert');

Route::get('/total',  [insert_time::class, 'settime']);


Route::post('/user/register', [UserController::class, 'CreateUser']);

Route::post('/user/login', [UserController::class, 'Login']);

Route::post('/user/insert', [DepartmentController::class, 'inserts']);

Route::post('/user/times', [TimesController::class, 'timess']);


Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('HandHygiene_server_id'));
    Cookie::queue(Cookie::forget('HandHygiene_server_name'));
    Cookie::queue(Cookie::forget('HandHygiene_server_username'));
    return redirect()->route('home');
});
