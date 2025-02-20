<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Capsule - Home')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

      <!-- Best Practice: Preload Fonts for Performance -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Rubik+Mono+One&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('app.js') }}"></script>
</body>
</html>
