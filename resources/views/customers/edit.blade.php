@extends('layout')
@section('title', 'Edit Customer')
@section('heading', 'Edit Customer')
@section('content')
<form class="card form-card" method="POST" action="{{ route('customers.update', $customer) }}">
    @csrf @method('PUT')
    <label>Full name<input name="full_name" value="{{ old('full_name', $customer->full_name) }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email', $customer->email) }}" required></label>
    <label>Phone<input name="phone" value="{{ old('phone', $customer->phone) }}"></label>
    <button class="button" type="submit">Update Customer</button>
</form>
@endsection
