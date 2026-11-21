<!DOCTYPE html>
<html>
<head>
    <title>About</title><link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="shell"><h1>About the Application</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers.index') }}">Customers</a> |
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    <p>This Pokémon-inspired POS application was created by <strong>Cyryl John Suficiencia</strong> using Laravel, Eloquent, validation, and public file storage.</p></main>
</body>
</html>
