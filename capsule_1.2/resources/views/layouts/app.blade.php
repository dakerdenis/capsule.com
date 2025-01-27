<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsule - car protection</title>

    <!-- Primary Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Capsule PPF provides high-quality protective films for cars, offering superior protection against scratches, chemical exposure, and damage while ensuring a glossy, transparent finish. Maintain your car’s aesthetics with ease.')">
    <meta name="keywords" content="Capsule PPF, car protection film, paint protection, polyurethane film, self-healing film, car aesthetics, scratch-resistant film">
    <meta name="author" content="Capsule PPF">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Capsule - Car Protection with PPF')">
    <meta property="og:description" content="@yield('og_description', 'Capsule PPF offers premium car protection with advanced polyurethane films featuring self-healing, water-repellent, and long-lasting durability.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/images/logo_main.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Capsule - Car Protection with PPF')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Preserve the original look of your car with Capsule’s innovative protective films. Superior protection, self-healing, and aesthetic excellence.')">
    <meta name="twitter:image" content="{{ asset('public/images/logo_main.png') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Select2 Library -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>

</html>
