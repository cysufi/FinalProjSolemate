@extends('layout')
@section('title', $product->name)
@section('heading', $product->name)
@section('content')
<div class="card product-detail"><img class="detail-image" src="{{ $product->image_url }}" alt="{{ $product->name }}"><div><p class="price">₱{{ number_format($product->price, 2) }}</p><p>{{ $product->stock_quantity }} pairs available</p><a class="button" href="{{ route('products.edit', $product) }}">Edit Shoe</a></div></div>
@endsection
