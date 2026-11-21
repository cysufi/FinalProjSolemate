<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="shell"><h1>User Accounts</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers.index') }}">Customers</a> |
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    @if (session('success')) <div class="alert success">{{ session('success') }}</div> @endif
    <a class="button" href="{{ route('users.create') }}">+ Add User</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>Avatar</th><th>Username</th><th>Full Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td><img class="avatar" src="{{ $user->avatar_url }}" alt="Avatar"></td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td><a class="button small" href="{{ route('users.edit', $user) }}">Edit</a></td>
            </tr>
        @endforeach
    </table></main>
</body>
</html>
