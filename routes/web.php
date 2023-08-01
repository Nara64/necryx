<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FrontCollectionController;

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
    return view('welcome');
});

Route::get('/collections/{type}',[FrontCollectionController::class,'index'])->name('collections');
Route::get('/collections/item/{collection}',[FrontCollectionController::class,'show'])->name('collection');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/admin/profile', function(){
    return view('profile.show-admin');

})->name('profile.admin');

Route::resource('articles', ArticleController::class);

Route::resource('types', TypeController::class);

Route::resource('collections', CollectionController::class);

Route::resource('tags', TagController::class);