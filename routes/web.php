<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class,'main'] )->name('main');
Route::get('tasnif',[\App\Http\Controllers\PageController::class,'tasnif'])->name('tasnif');
Route::get('aloqa',[\App\Http\Controllers\PageController::class,'aloqa'])->name('aloqa');

Route::get('login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('authenticate',[\App\Http\Controllers\AuthController::class,'authenticate'])->name('authenticate');
Route::post('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::post('register',[\App\Http\Controllers\AuthController::class,'register_store'])->name('register.store');

Route::get('notifications/{notification}/read',[\App\Http\Controllers\NotificationController::class,'read'])->name('notifications.read');

Route::get('language/{locale}',[\App\Http\Controllers\LanguageController::class, 'change_locale'])->name('locale.change');

Route::resources([
    'products'=>\App\Http\Controllers\ProductController::class,
    'comments'=>\App\Http\Controllers\CommentController::class,
    'notification'=>\App\Http\Controllers\NotificationController::class,
]);
