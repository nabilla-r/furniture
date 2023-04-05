@extends('layouts.app')
@section('main')

<body>
    <div class="mt-5 mx-auto" style="width: 500px;">
        <div class="card bg-dark" style="margin-top: 150px;">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email')}}">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password')}}">
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror                    
                <a href="{{ route('password.request') }}" class="btn btn-link text-dark" style="margin-top: 10px;">
                    Forgot your password?
                </a>
                </div>

                <button type="login" class="btn btn-dark" style="margin-top: 15px;">Login</button>
                <a class="btn btn-dark" href="{{ route('welcome') }}" style="margin-top: 15px; margin-left: 5px;">Back</a> 
                <hr class="text-dark">Don't have an account?<a href="{{ route('register') }}" class="btn btn-link text-dark">Sign-up here
                </a>
            </form>
        </div>
    </div>
</div>
</body>
@endsection
