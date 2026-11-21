@extends('layout')
@section('title', 'Customer Details')
@section('heading', 'Customer Details')
@section('content')
<div class="card"><p><strong>Name:</strong> {{ $customer->full_name }}</p><p><strong>Email:</strong> {{ $customer->email }}</p><p><strong>Phone:</strong> {{ $customer->phone ?: '—' }}</p><a class="button" href="{{ route('customers.edit', $customer) }}">Edit</a></div>
@endsection
