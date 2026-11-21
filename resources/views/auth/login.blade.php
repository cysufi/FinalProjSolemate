@extends('layout')
@section('title', 'Login')
@section('heading', 'Trainer Login')
@section('content')
<form class="card form-card" method="POST" action="{{ route('login.store') }}">
    @csrf
    @if ($errors->any()) <div class="alert error">{{ $errors->first() }}</div> @endif
    <label>Email<input type="email" name="email" value="{{ old('email') }}" required autofocus></label>
    <label>Password<input type="password" name="password" required></label>
    <label class="check"><input type="checkbox" name="remember"> Remember me</label>
    <button class="button" type="submit">Log In</button>
    <p>New trainer? <a href="{{ route('register') }}">Create an account</a></p>
</form>
@endsection
