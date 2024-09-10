<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyVoyagerController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
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

    Route::post('orderFiles/{table}/{field}/{id}', [MyVoyagerController::class,'orderFiles'])->name('voyager.orderFiles');
    Route::post('orderImages/{table}/{field}/{id}', [MyVoyagerController::class,'orderImages'])->name('voyager.orderImages');
});


Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('{slug}', [PageController::class,'index'])->name('page');
Route::get('hizmet/{slug?}', [PageController::class,'service'])->name('service')->where('slug','.*');
Route::get('referanslar/{slug}', [PageController::class,'client_categories'])->name('client-categories');





Route::get('haber/{slug}', [PageController::class,'detail'])->name('news');
Route::get('blog/{slug}', [PageController::class,'detail'])->name('blog');
Route::get('akreditasyon/{slug}', [PageController::class,'detail'])->name('accreditation');


