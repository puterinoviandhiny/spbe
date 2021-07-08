<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\berandaController;
use App\Http\Controllers\frontend\qnaController;
use App\Http\Controllers\frontend\perkebController;
use App\Http\Controllers\frontend\sopController;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [berandaController::class, 'index'])->name('frontend.beranda');
Route::get('/tanyajawab', [qnaController::class, 'index'])->name('frontend.qna');
Route::get('/tanyajawab/{id}', [qnaController::class, 'show'])->name('frontend.qna.pertanyaan');
Route::get('/tanya', [qnaController::class, 'tanya'])->name('frontend.qna.tanya');
Route::post('/tanyaaction', [qnaController::class, 'store'])->name('frontend.qna.store');
Route::get('/peraturankebijakan', [perkebController::class, 'index'])->name('frontend.perkeb');
Route::get('/sop', [sopController::class, 'index'])->name('frontend.sop');

