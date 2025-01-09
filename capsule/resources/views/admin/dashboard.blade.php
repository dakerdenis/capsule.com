<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="admin-dashboard-wrapper">
        <h1>Welcome to Admin Dashboard</h1>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>

</html>
