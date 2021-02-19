@extends('layouts.master')

@section('content')
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-4/12 mt-20">
        <div class="mb-5 flex">            
            <div class="flex-auto text-3xl text-center font-bold">Register</div>                
        </div>        
        <form method="POST" action="{{ route('register') }}" class="shadow-lg p-4 flex flex-col bg-white rounded-lg">
            @csrf
            <label for="name" class="mb-1 font-bold text-green-800">Name</label>        
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror 

            <label for="email" class="mb-1 font-bold text-green-800">{{ __('E-Mail Address') }}</label> 
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        
            <label for="password" class="mb-1 font-bold text-green-800">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror

            <label for="password-confirm" class="mb-1 font-bold text-green-800">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
@endsection