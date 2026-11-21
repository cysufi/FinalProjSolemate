@extends('layout')
@section('title', 'SoleMate Inventory')
@section('heading', 'SoleMate Inventory')
@section('content')
@if (session('success')) <div class="alert success">{{ session('success') }}</div> @endif
<div class="page-actions"><p class="muted">Manage your sneaker catalog and stock levels.</p><a class="button" href="{{ route('products.create') }}">+ Add Shoe</a><a class="button yellow" href="{{ route('sales.create') }}">Record Sale</a></div>
<div class="shoe-grid">
@forelse ($products as $product)
<article class="shoe-card"><div class="shoe-image"><img src="{{ $product->image_url }}" alt="{{ $product->name }}"></div><div class="shoe-body"><span class="stock {{ $product->stock_quantity <= 5 ? 'low' : '' }}">{{ $product->stock_quantity }} in stock</span><h3>{{ $product->name }}</h3><p class="price">₱{{ number_format($product->price, 2) }}</p><div class="card-actions"><a class="button small" href="{{ route('products.edit', $product) }}">Edit</a><form method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Remove this shoe from inventory?')">@csrf @method('DELETE')<button class="button small danger" type="submit">Delete</button></form></div></div></article>
@empty <div class="card"><p>No shoes in inventory yet.</p></div> @endforelse
</div>
@endsection
