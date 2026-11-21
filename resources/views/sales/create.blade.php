@extends('layout')
@section('title', 'Record Sale')
@section('heading', 'Record a Shoe Sale')
@section('content')
<form class="card form-card" method="POST" action="{{ route('sales.store') }}">@csrf
@if ($errors->any()) <div class="alert error">{{ $errors->first() }}</div> @endif
<label>Shoe<select name="product_id" required><option value="">Choose a shoe</option>@foreach ($products as $product)<option value="{{ $product->id }}" @selected(old('product_id') == $product->id)>{{ $product->name }} — ₱{{ number_format($product->price, 2) }} ({{ $product->stock_quantity }} available)</option>@endforeach</select></label>
<label>Customer <span class="hint">Optional for walk-in sales</span><select name="customer_id"><option value="">Walk-in customer</option>@foreach ($customers as $customer)<option value="{{ $customer->id }}" @selected(old('customer_id') == $customer->id)>{{ $customer->full_name }}</option>@endforeach</select></label>
<label>Quantity<input type="number" name="quantity" min="1" value="{{ old('quantity', 1) }}" required></label><button class="button yellow" type="submit">Complete Sale</button>
</form>
@endsection
