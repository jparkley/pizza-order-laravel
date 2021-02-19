@extends('layouts.master')

@section('content')
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-4/12 mt-20">
        <div class="mb-5 flex">            
            <div class="flex-auto text-3xl text-center font-bold">Login</div>                
        </div>

        <form action="{{ route('login') }}" method="post" class="shadow-lg p-4 flex flex-col bg-white rounded-lg">        
            @csrf
            <label for="email" class="mb-1 font-bold text-green-800">E-Mail Address: </label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror 
            <label for="password" class="mb-1 font-bold text-green-800">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror            
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>
</div>
@endsection
