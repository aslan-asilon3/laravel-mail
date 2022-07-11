<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GmailController;




Route::get('/', [HomeController::class, 'index']);

// Mailtrap 
Route::get('/mailtrap', [EmailController::class, 'index']);
Route::get('/mailtrap-send', [EmailController::class, 'mailtrapSend']);

// Gmail
Route::get('/gmail', [GmailController::class, 'index']);
Route::get('/gmail-send', [GmailController::class, 'gmailSend']);
