    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Capsule - car proection')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <main>
            @yield('content')
        </main>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    </html>
