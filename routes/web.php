<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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

Route::get('/', function () {
    return view('dashboard.index');
});

// ====== Send To Gmail 


Route::get('/gmail',[App\Http\Controllers\SendEmailController::class,'index'])->name('gmail-index');
Route::get('/gmail/create',[App\Http\Controllers\SendEmailController::class,'create'])->name('gmail-create');
Route::post('/gmail/send',[App\Http\Controllers\SendEmailController::class,'store'])->name('gmail-send');

// Route::get('/send-gmail',function(){

// });
// ====== End Send To Gmail 
