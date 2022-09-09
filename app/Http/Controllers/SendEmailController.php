<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailJob;


class SendEmailController extends Controller
{

    public function index()
    {
        return view('emails.gmail.index');
    }

    public function create()
    {
        return view('emails.gmail.create');
    }

    public function send(Request $request)
    {
        $data = [
            'name' => 'Aslan Asilon',
            'body' => 'Testing Kirim Email '
        ];
       
        // $data = $request->validate([
        //     'name' => 'required|max:255',
        //     'body' => 'required',
        // ]);
        // $data = $request->validate([
        //     'name' => 'required|max:255',
        //     'body' => 'required',
        // ]);

        // Mail::to('sulaslansetiawan1@gmail.com')->send(new SendEmail($data));
        // return view('emails.gmail.success',compact('data'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        dispatch(new SendMailJob($data));
        return redirect()->route('gmail-send')->with('status', 'Email berhasil dikirim');

    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

