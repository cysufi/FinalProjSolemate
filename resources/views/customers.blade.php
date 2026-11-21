<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="shell"><h1>Customer Accounts</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers.index') }}">Customers</a> |
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    @if (session('success')) <div class="alert success">{{ session('success') }}</div> @endif
    <a class="button" href="{{ route('customers.create') }}">+ Add Customer</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone ?: '—' }}</td>
                <td><a class="button small" href="{{ route('customers.edit', $customer) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</main>
</body>
</html>
