@extends('layout')
@section('title', 'Sales History')
@section('heading', 'Sales History')
@section('content')
@if (session('success')) <div class="alert success">{{ session('success') }}</div> @endif
<a class="button" href="{{ route('sales.create') }}">+ Record Sale</a>
<div class="table-wrap"><table><thead><tr><th>Shoe</th><th>Customer</th><th>Staff</th><th>Qty</th><th>Total</th><th>Date</th></tr></thead><tbody>@forelse ($sales as $sale)<tr><td>{{ $sale->product->name }}</td><td>{{ $sale->customer?->full_name ?? 'Walk-in customer' }}</td><td>{{ $sale->staff->full_name }}</td><td>{{ $sale->quantity }}</td><td>₱{{ number_format($sale->total_price, 2) }}</td><td>{{ $sale->created_at->format('M d, Y h:i A') }}</td></tr>@empty<tr><td colspan="6">No sales recorded yet.</td></tr>@endforelse</tbody></table></div>
@endsection
