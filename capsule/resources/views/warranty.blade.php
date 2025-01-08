
<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/warranty.css') }}"> <!-- Link to warranty.css -->
</head>

<body>
    <div class="admin__wrapper">
        <div class="admin__login-form">
            <div class="admin__login__wrapper">
                <div class="login_image">
                    <img src="{{asset('./images/logo_main.png')}}" alt="" srcset="">
                </div>
                <div class="login__hello">
                    Xoş gəldiniz!
                </div>
                <div class="login__desc">
                    CAPSULEPPF İdarəetmə panelı
                </div>

                <form method="POST" action="" class="login__form">
                    <input type="hidden" name="_token" value="MHdfqaqxlNXJBwqEmngUlSkqT15NTxqnxUNszVz3" autocomplete="off">                    <div class="input__container">
                        <div class="input__container__desc">
                            Login
                        </div>

                        <div class="input__field">
                            <input type="text" id="email" name="email" placeholder="Login |" required>
                        </div>
                    </div>

                    <div class="input__container">
                        <div class="input__container__desc">
                            Şifrə
                        </div>

                        <div class="input__field">
                            <input type="password" id="password" name="password" placeholder="Şifrə |" required>
                        </div>
                    </div>

                                        <div class="input__button">
                        <button type="submit">Daxil ol</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="admin__bakcground">
            <img src="./style/imgs/admin_back.png" alt="">
        </div>


    </div>
</body>

</html>
