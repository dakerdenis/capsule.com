<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Capsule - Home')</title>


    <!-- Primary Meta Tags -->
    <meta name="description"
        content="Capsule PPF provides high-quality protective films for cars, offering superior protection against scratches, chemical exposure, and damage while ensuring a glossy, transparent finish. Maintain your car’s aesthetics with ease.">
    <meta name="keywords"
        content="Capsule PPF, car protection film, paint protection, polyurethane film, self-healing film, car aesthetics, scratch-resistant film">
    <meta name="author" content="Capsule PPF">
    <link rel="canonical" href="https://capsuleppf.com/en">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Capsule - Car Protection with PPF">
    <meta property="og:description"
        content="Capsule PPF offers premium car protection with advanced polyurethane films featuring self-healing, water-repellent, and long-lasting durability.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://capsuleppf.com/en">
    <meta property="og:locale" content="en_US">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Capsule - Car Protection with PPF">
    <meta name="twitter:description"
        content="Preserve the original look of your car with Capsule’s innovative protective films. Superior protection, self-healing, and aesthetic excellence.">

    <!----Location MEta tags---->
    <meta name="geo.region" content="US">
    <meta name="geo.placename" content="United States">
    <meta name="geo.position" content="37.0902;-95.7129">
    <meta name="ICBM" content="37.0902, -95.7129">




    <link rel="stylesheet" href="{{ asset('style.css') }}" media="all" />



    <!-- Best Practice: Preload Fonts for Performance -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Rubik+Mono+One&display=swap" rel="stylesheet" />

</head>

<body>
    <main>
        @yield('content')
    </main>

    <script defer src="{{ asset('app.js') }}"></script>
</body>

</html>
