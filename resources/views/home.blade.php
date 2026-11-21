<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>SoleMate Shoe POS</title><link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>
<body>
<main class="shell dashboard">
<nav class="top-nav"><a class="brand" href="{{ route('home') }}">SOLE<span>MATE</span></a><a href="{{ route('about') }}">About</a>@auth<a href="{{ route('products.index') }}">Inventory</a><a href="{{ route('sales.index') }}">Sales</a><form class="inline" method="POST" action="{{ route('logout') }}">@csrf<button class="nav-button" type="submit">Log out</button></form>@else<a href="{{ route('login') }}">Log in</a><a href="{{ route('register') }}">Register</a>@endauth</nav>
<section class="hero shoe-hero"><div><p class="eyebrow">THE EVERYDAY KICK CLUB</p><h1>Find your next<br><em>favorite step.</em></h1><p class="hero-copy">A lively point-of-sale workspace for the team behind every great pair.</p>@auth<a class="button yellow" href="{{ route('products.index') }}">Open inventory →</a>@else<a class="button yellow" href="{{ route('login') }}">Staff sign in →</a>@endauth</div><div class="hero-shoe">👟</div></section>
@auth
<section class="stats"><div><strong>{{ $productCount }}</strong><span>Shoes listed</span></div><div><strong>{{ $lowStock }}</strong><span>Low stock</span></div><div><strong>{{ $salesCount }}</strong><span>Sales recorded</span></div></section>
<section class="section-heading"><h2>Fresh on the shelf</h2><a href="{{ route('products.index') }}">View all →</a></section>
<div class="mini-grid">@foreach ($featuredProducts as $product)<a class="mini-shoe" href="{{ route('products.show', $product) }}"><img src="{{ $product->image_url }}" alt="{{ $product->name }}"><span>{{ $product->name }}</span><b>₱{{ number_format($product->price, 2) }}</b></a>@endforeach</div>
@endauth
</main></body></html>
