<!-- resources/views/verification.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2B54N2FD1H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2B54N2FD1H');
</script>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/casule_favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/casule_favicon.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty System</title>
    <link rel="stylesheet" href="{{ asset('css/verification.css') }}"> <!-- Link to warranty.css -->
    <link rel="stylesheet" href="{{ asset('css/warranty.css') }}"> <!-- Link to warranty.css -->
</head>
<!-- Google tag (gtag.js) -->


<body>
    <div class="verification__container">
        <div class="verification__wrapper">
            <!---Verification FORM--->
            <div class="verification__form">
                <div class="verification__form-absoluteimage">
                    <img src="{{ asset('public/images/background.png') }}" alt="">
                </div>
                <div class="verification__content">
                    <!---top image--->
                    <div class="verification__form-image">
                        <img src="{{ asset('public/images/logo_main.png') }}" alt="">
                    </div>
                    <!---form--->
                    <div class="verification__form-form">
                        <div class="verification__form-name">
                            <h2>Welcome to “Capsule”</h2>
                            <h3>Warranty Activation System</h3>
                        </div>
                        <div class="verification__form-line">
                            <div class="verification__form-line-line"></div>
                            <div class="verification__form-text">
                                please log in
                            </div>
                            <div class="verification__form-line-line"></div>
                        </div>
                        <div class="verification__form-formblock">
                            <form action="{{ route('service.post_login') }}" method="POST">
                                @csrf <!-- Include CSRF token for security -->
                            
                                <div class="input__wrapper">
                                    <input value="klakin@example.com" placeholder="Login" type="email" name="email" id="email" required>
                                    @if ($errors->has('email'))
                                        <div style="color: red; font-size: 14px;">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="input__wrapper">
                                    <input value="password" placeholder="Password" type="password" name="password" id="password" required>
                                    @if ($errors->has('password'))
                                        <div style="color: red; font-size: 14px;">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="input__wrapper">
                                    <div class="input__wrapper-info">i</div>
                                    <input  placeholder="Enter product code" type="text" name="product_code" id="product_code" required>
                                    @if ($errors->has('product_code'))
                                        <div style="color: red; font-size: 14px;">
                                            {{ $errors->first('product_code') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="verification__form-submit">
                                    <button name="submit" type="submit">
                                        Check Warranty
                                    </button>
                                </div>
                            </form>
                            
                            <!-- Display generic errors, such as authentication or product code validation -->
                            @if ($errors->any())
                                <div style="color: red; font-size: 14px; margin-top: 10px;">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                            
                            
                        </div>
                    </div>
                    <!-----bottom form-->
                    <div class="verification__form-image_form">
                        <img src="{{ asset('public/images/warranty_bottom.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <!---Verification IMAGE---->
            <div class="verification__car">
                <div class="verification__car-image">
                    <img src="{{ asset('public/images/warranty_page.PNG') }}" alt="">
                </div>

                <div class="verification__car-alert">

                </div>

            </div>
        </div>
    </div>


    
</body>

</html>
