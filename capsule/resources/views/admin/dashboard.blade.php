<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
       <!-- Section-Specific CSS -->
       @if ($section === 'home')
       <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
   @elseif ($section === 'products')
       <link rel="stylesheet" href="{{ asset('css/admin/products.css') }}">
   @elseif ($section === 'services')
       <link rel="stylesheet" href="{{ asset('css/admin/services.css') }}">
   @elseif ($section === 'warranties')
       <link rel="stylesheet" href="{{ asset('css/admin/warranties.css') }}">
   @endif
</head>

<body>

    <div class="admin__wrapper">
        <div class="admin__wrapper__controlpanel">
            <div class="admin__logo">
                <img src="{{asset('images/logo_main.png')}}" alt="">
            </div>

            <div class="admin__hello">
                <h1>Welcome to Admin Dashboard</h1>
            </div>

            <div class="admin__navigation">
                <div class="admin__navigation-element">
                    <a href="{{ route('admin.dashboard', ['section' => 'home']) }}">Главная</a>
                </div>
                <div class="admin__navigation-element">
                    <a href="{{ route('admin.dashboard', ['section' => 'products']) }}">Товары</a>
                </div>
                <div class="admin__navigation-element">
                    <a href="{{ route('admin.dashboard', ['section' => 'services']) }}">Продукты</a>
                </div>
                <div class="admin__navigation-element">
                    <a href="{{ route('admin.dashboard', ['section' => 'warranties']) }}">Гарантии</a>
                </div>
            </div>

            <div class="admin__logout">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>

        <div class="admin__wrapper__content">
            <div class="admin__content_container">
                @include('admin.components.' . $section)
            </div>
        </div>
    </div>
</body>

</html>
