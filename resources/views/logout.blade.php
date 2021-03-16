<!-- <form method="POST" action="{{ route('logout') }}">
    @csrf

    <a href="{{ route('logout') }}"
    you are logout for login again click to login button below.
        onclick="event.preventDefault();
        this.closest('form').submit();">
        
        {{ __('Login') }}
    </a>
</form>
 -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1>you are Loged out</h1>
            
        </div>
    </div>
</div>
@endsection

