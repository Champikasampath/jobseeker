@extends('layouts.app')

@section('register', 'Register')

@section('content')
    <div>
        @error('email', 'login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="" method="post">
            @csrf
            Full Name<input type="text" name="fullname"/>
            Email<input type="text" name="email"/>
            Password<input type="password" name="password"/>
            Retype Password<input type="password" name="confirm_password"/>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
@endsection
