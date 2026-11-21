@extends('layout')
@section('title', 'Register')
@section('heading', 'Create Trainer Account')
@section('content')
<form class="card form-card" method="POST" action="{{ route('register.store') }}">
    @csrf
    @if ($errors->any()) <div class="alert error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
    <label>Username<input name="username" value="{{ old('username') }}" required></label>
    <label>Full name<input name="full_name" value="{{ old('full_name') }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email') }}" required></label>
    <label>Password<input type="password" name="password" required></label>
    <label>Confirm password<input type="password" name="password_confirmation" required></label>
    <button class="button yellow" type="submit">Register</button>
</form>
@endsection
