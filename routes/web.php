<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\UserController;
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
    return view('layout.index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/demo/{var1}', function ($var1) {
    // echo $var1;
    $data = compact('var1');

    return view('test')->with($data);
});

Route::resource('acc', AccountsController::class);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/accView', [UserController::class, 'viewAcc']);
Route::get('/accView/del/{id}', [UserController::class, 'delAcc'])->name('acc.delete');
Route::get('/accView/edit/{id}', [UserController::class, 'editAcc'])->name('acc.edit');
Route::post('/accView/update/{id}', [UserController::class, 'updateAcc'])->name('acc.update');
