<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\InitiativeController;

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



Auth::routes(['register' => false]);


Route::prefix('')->group(function()
{
   Route::get('/',[SiteController::class,'home'])->name('index');
   Route::get('donte',[SiteController::class,'donte'])->name('donte');
   Route::post('dontemessage',[SiteController::class,'dontemessage'])->name('dontemessage');
   Route::get('blog',[SiteController::class,'blog'])->name('blog');
   Route::post('order',[SiteController::class,'order'])->name('order');
});
Route::prefix('admin')->name('admin.')->group(function()
{
   Route::get('/',[AdminController::class,'admin'])->name('home');
   Route::get('orders',[AdminController::class,'orders'])->name('orders');
   Route::get('initiatives',[InitiativeController::class,'index'])->name('initiatives');
   Route::post('addinitiatives',[InitiativeController::class,'store'])->name('addinitiatives');
   Route::post('initiative_delete/{id}',[InitiativeController::class,'destroy'])->name('initiative_delete');
   Route::post('initiativeedit/{id}',[InitiativeController::class,'update'])->name('initiativeedit');
   Route::post('order_delete/{id}',[AdminController::class,'order_delete'])->name('order_delete');
   Route::post('order_edit/{id}',[AdminController::class,'order_edit'])->name('orderedit');
   Route::post('order_delete/{id}',[AdminController::class,'order_delete'])->name('order_delete');

});

Route::group(['prefix' => 'paypal', 'as' => 'paypal.'], function() {
    Route::get('process', [PayController::class, 'process'])->name('processTransaction');
    Route::get('success-transaction', [PayController::class, 'success'])->name('successTransaction');
    Route::get('cancel-transaction', [PayController::class, 'cancel'])->name('cancelTransaction');
});



