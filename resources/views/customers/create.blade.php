@extends('layout')
@section('title', 'Add Customer')
@section('heading', 'Add Customer')
@section('content')
<form class="card form-card" method="POST" action="{{ route('customers.store') }}">
    @csrf
    <label>Full name<input name="full_name" value="{{ old('full_name') }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email') }}" required></label>
    <label>Phone<input name="phone" value="{{ old('phone') }}"></label>
    <button class="button" type="submit">Save Customer</button>
</form>
@endsection
