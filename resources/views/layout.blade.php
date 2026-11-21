<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PokéPOS')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body><main class="shell">
    <h1>@yield('heading', 'PokéPOS')</h1>
    <nav><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a>
        @auth
            <a href="{{ route('products.index') }}">Shoes</a><a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">Staff</a><a href="{{ route('sales.index') }}">Sales</a>
            <form class="inline" method="POST" action="{{ route('logout') }}">@csrf<button class="nav-button" type="submit">Log out</button></form>
        @else
            <a href="{{ route('login') }}">Log in</a><a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>
    @if ($errors->any())
        <div class="alert error"><strong>Please correct the following:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    @yield('content')
</main></body>
</html>
