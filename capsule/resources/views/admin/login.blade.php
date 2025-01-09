<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('/css/warranty.css') }}"> <!-- Link to warranty.css -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <div class="admin__wrapper">
        <div class="admin__login-form">
            <div class="admin__login__wrapper">
                <div class="login_image">
                    <img src="{{ asset('/images/logo_main.png') }}" alt="" srcset="">
                </div>
                <div class="login__hello">
                    Welcome !
                </div>
                <div class="login__desc">
                    CAPSULEPPF warranty page
                </div>

                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <!-- Input fields for email and password -->
                    <div class="input__container">
                        <div class="input__container__desc">
                            Login
                        </div>
                
                        <div class="input__field">
                            <input type="text" id="email" name="email" placeholder="Login |" required>
                        </div>
                    </div>
                
                    <div class="input__container">
                        <div class="input__container__desc">
                            Password
                        </div>
                
                        <div class="input__field">
                            <input type="password" id="password" name="password" placeholder="Password |" required>
                        </div>
                    </div>
                

                
                    <div class="input__button">
                        <button type="submit">Login</button>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="admin__bakcground">
            <img src="{{asset('/images/admin.jpeg')}}" alt="">
        </div>


    </div>
</body>


</html>
