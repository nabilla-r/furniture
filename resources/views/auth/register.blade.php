@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card bg-dark" style="margin-top: 120px;">
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name')}}">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

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
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                
                <button type="register" class="btn btn-dark" style="margin-top: 5px;">Register</button>
                <a class="btn btn-dark" href="{{ route('welcome') }}" style="margin-top: 5px; margin-left: 5px;">Back</a>
                <hr class="text-dark">Have an account?<a href="{{ route('login') }}" class="btn btn-link text-dark">Login here
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
