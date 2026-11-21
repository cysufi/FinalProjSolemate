@extends('layout')
@section('title', 'Add Shoe')
@section('heading', 'Add a New Shoe')
@section('content')
<form class="card form-card" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">@csrf
<label>Shoe name<input name="name" value="{{ old('name') }}" required></label><label>Price<input type="number" step="0.01" min="0" name="price" value="{{ old('price') }}" required></label><label>Stock quantity<input type="number" min="0" name="stock_quantity" value="{{ old('stock_quantity', 0) }}" required></label><label>Product image <span class="hint">JPG, PNG, or WEBP up to 2 MB</span><input type="file" name="image" accept="image/jpeg,image/png,image/webp"></label><button class="button" type="submit">Save Shoe</button>
</form>
@endsection
