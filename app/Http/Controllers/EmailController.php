<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    //
    public function index()
    {
        // Mail::to("sulaslansetiawan1@email.com")->send(new SendEmail());
        return view('Mailtrap');
    }

    public function mailtrapSend()
    {
        $email = 'sulaslansetiawan1@gmail.com';
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://www.youtube.com',
        ];
        Mail::to($email)->send(new SendEmail($data));
        return redirect('/mailtrap')->with('success', 'The Email has been send to Mailtrap ');
    }


}
