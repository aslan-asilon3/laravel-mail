@extends('layouts.app')

@section('content')


<div class="card w-100 h-300 mt-5">
  <div class="card-title bg-primary text-white ">
    Gmail
  </div>
  <div class="card-body">
    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif

    <a type="button" class="btn btn-primary mt-10 text-center" href="/gmail-send">Send Email</a>

  </div>

</div>

    
@endsection