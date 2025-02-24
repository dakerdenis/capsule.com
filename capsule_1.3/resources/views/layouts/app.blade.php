<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Capsule - Home')</title>


    <!-- Primary Meta Tags -->
    <meta name="description" content="Capsule PPF offers high-quality car protection films with self-healing, scratch resistance, and superior durability. Protect your car's paint with innovative technology.">
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




    <link rel="stylesheet" href="{{ asset('style.css') }}" />


    <!-- Preload Fonts for Performance -->
    <link rel="preload" href="{{ asset('fonts/Inter/Inter-VariableFont_opsz,wght.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('fonts/Rubik_Mono_One/RubikMonoOne-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Capsule PPF",
          "url": "https://capsuleppf.com/en",
          "logo": "https://capsuleppf.com/images/logo-large.webp",
          "description": "High-quality paint protection film with superior durability, self-healing technology, and hydrophobic properties.",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+13028533979",
            "contactType": "customer service",
            "areaServed": "US"
          }
        }
        </script>
        
</head>

<body>
        @yield('content')

    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
