<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/api/user', [UserController::class, 'all'])->name('user.all');

Route::get('/api/user/{user}', [UserController::class, 'getUser'])->name('user.getUser');
Route::get('/api/user/email/{email}', [UserController::class, 'getUserEmail'])->name('user.getUserEmail');
Route::get('/api/user/startDate/{startDate}/endDate/{endDate}', [UserController::class, 'getUserDateInterval'])
->name('user.getUserDateInterval');

Route::post('/api/user', [UserController::class, 'store'])->name('user.store');
Route::put('/api/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/api/user/{id}', [UserController::class, 'delete'])->name('user.delete');