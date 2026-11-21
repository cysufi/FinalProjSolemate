@extends('layout')
@section('title', 'Edit Shoe')
@section('heading', 'Edit Shoe')
@section('content')
<form class="card form-card" method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">@csrf @method('PUT')
<label>Shoe name<input name="name" value="{{ old('name', $product->name) }}" required></label><label>Price<input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price) }}" required></label><label>Stock quantity<input type="number" min="0" name="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity) }}" required></label><label>Replace product image <span class="hint">JPG, PNG, or WEBP up to 2 MB</span><input type="file" name="image" accept="image/jpeg,image/png,image/webp"></label><button class="button" type="submit">Update Shoe</button>
</form>
@endsection
