<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


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
    return view('layouts.app-adminlte3');
});

// ====== Send To Gmail 


Route::get('/gmail',[App\Http\Controllers\SendGmailController::class,'index'])->name('gmail-index');
Route::get('/gmail/create',[App\Http\Controllers\SendGmailController::class,'create'])->name('gmail-create');
Route::get('/gmail/send',[App\Http\Controllers\SendGmailController::class,'send'])->name('gmail-send');

// Route::get('/send-gmail',function(){

// });
// ====== End Send To Gmail 


// ====== Send To Mailtrap
Route::get('/mailtrap',[App\Http\Controllers\SendMailTrapController::class,'index'])->name('mailtrap-index');

Route::get('/mailtrap', function () {
    return view('layouts.app-adminlte3');
});
Route::get('/send-mailtrap',function(){
    $data = [
        'name' => 'Aslan Asilon',
        'body' => 'Testing Kirim Email '
    ];
   
    Mail::to('sulaslansetiawan1@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
});
// ====== End Send To MailTrap
