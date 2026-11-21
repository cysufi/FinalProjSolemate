@extends('layout')
@section('title', 'Add User')
@section('heading', 'Add User')
@section('content')
<form class="card form-card" method="POST" action="{{ route('users.store') }}">
    @csrf
    <label>Username<input name="username" value="{{ old('username') }}" required></label>
    <label>Full name<input name="full_name" value="{{ old('full_name') }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email') }}" required></label>
    <button class="button yellow" type="submit">Save User</button>
</form>
@endsection
