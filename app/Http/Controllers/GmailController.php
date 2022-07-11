<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailGoogle;

class GmailController extends Controller
{
    //
    public function index()
    {
        // Mail::to("sulaslanset iawan1@email.com")->send(new SendEmail());
        return view('Gmail');
    }

    public function gmailSend()
    {
        $email = 'sulaslansetiawan1@gmail.com';
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://www.youtube.com',
        ];
        Mail::to($email)->send(new SendEmailGoogle($data));
        return redirect('/gmail')->with('success', 'The Email has been send to Gmail');
    }

}
