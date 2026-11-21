@extends('layout')
@section('title', 'Edit User')
@section('heading', 'Edit User')
@section('content')
<form class="card form-card" method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
    @csrf @method('PUT')
    <label>Username<input name="username" value="{{ old('username', $user->username) }}" required></label>
    <label>Full name<input name="full_name" value="{{ old('full_name', $user->full_name) }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email', $user->email) }}" required></label>
    <label>Profile picture <span class="hint">JPG, PNG, or WEBP; maximum 2 MB</span><input type="file" name="avatar" accept="image/jpeg,image/png,image/webp"></label>
    <button class="button yellow" type="submit">Update User</button>
</form>
@endsection
