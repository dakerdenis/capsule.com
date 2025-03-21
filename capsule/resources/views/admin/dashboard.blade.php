<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <img src="{{ asset('images/logo_main.png') }}" alt="">
            </div>

            <div class="admin__hello">
                <p>Welcome to Admin Dashboard</p>
            </div>

            <div class="admin__navigation">
                <div class="admin__navigation-element">
                    <a class="btn btn-dark" href="{{ route('admin.dashboard') }}">Главная</a>
                </div>
                <div class="admin__navigation-element">
                    <a class="btn btn-dark" href="{{ route('admin.products') }}">Товары</a>
                </div>
                <div class="admin__navigation-element">
                    <a class="btn btn-dark" href="{{ route('admin.services') }}">Сервисы</a>
                </div>
                <div class="admin__navigation-element">
                    <a class="btn btn-dark" href="{{ route('admin.warranties') }}">Гарантии</a> <!-- Use 'admin.warranties' -->
                </div>
            </div>
            

            <div class="admin__logout">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-dark">Logout</button>
                </form>
            </div>
        </div>

        <div class="admin__wrapper__content">
            <div class="admin__content_container">
                @include('admin.components.' . $section)
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
