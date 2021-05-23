@extends('layouts.app')

@section('login', 'Login')

@section('content')
    <div>
        @error('email', 'login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="" method="post">
            @csrf
            Email<input type="text" name="email"/>
            Password<input type="password" name="password"/>
            <input type="submit" name="login" value="Login">

        </form>
    </div>
@endsection
