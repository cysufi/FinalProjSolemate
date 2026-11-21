@extends('layout')
@section('title', 'User Details')
@section('heading', 'User Details')
@section('content')
<div class="card"><img class="avatar large" src="{{ $user->avatar_url }}" alt="Avatar"><p><strong>Username:</strong> {{ $user->username }}</p><p><strong>Name:</strong> {{ $user->full_name }}</p><p><strong>Email:</strong> {{ $user->email }}</p><a class="button" href="{{ route('users.edit', $user) }}">Edit</a></div>
@endsection
