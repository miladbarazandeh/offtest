<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\ProfileController;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\RequestController;

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

Route::get('/', 'IndexController@indexAction')->name('index');
Route::get('/product/{id}', 'ProductController@indexAction')->name('product');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('profile', [ProfileController::class, 'indexAction'])->name('panel.profile');
Route::get('profile-edit', [ProfileController::class, 'editAction'])->name('panel.profile.edit');
Route::post('profile-edit', [ProfileController::class, 'editSaveAction'])->name('panel.profile.edit.save');
Route::get('send-verification-sms', [ProfileController::class, 'sendVerificationSms'])->name('panel.profile.verification');
Route::post('send-verification-sms', [ProfileController::class, 'verifySmsCode'])->name('panel.profile.verify');


Route::get('requests', [RequestController::class, 'indexAction'])->name('panel.requests');
Route::get('request/{productId}', [RequestController::class, 'addToCartAction'])->name('panel.request.add');
