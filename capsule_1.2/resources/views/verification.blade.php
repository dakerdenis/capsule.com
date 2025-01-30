<!-- resources/views/verification.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="{{ asset('css/verification.css') }}"> <!-- Link to warranty.css -->
</head>
</head>

<body>
    <div class="verification__container">
        <div class="verification__wrapper">
            <!---Verification FORM--->
            <div class="verification__form">
                <div class="verification__form-absoluteimage">
                    <img src="{{ asset('images/background.png') }}" alt="">
                </div>
                <div class="verification__content">
                    <!---top image--->
                    <div class="verification__form-image">
                        <img src="{{ asset('images/logo_main.png') }}" alt="">
                    </div>
                    <!---form--->
                    <div class="verification__form-form">
                        <div class="verification__form-name">
                            <h2>Welcome to “Capsule”</h2>
                            <h3>product verification system</h3>
                        </div>
                        <div class="verification__form-line">
                            <div class="verification__form-line-line"></div>
                            <div class="verification__form-text">
                                enter your film code
                            </div>
                            <div class="verification__form-line-line"></div>
                        </div>
                        <div class="verification__form-formblock">
                            <form action="">
                                <div class="input__wrapper">
                                    <div class="input__wrapper-info">
                                        i
                                    </div>
                                    <input placeholder="Enter product code" type="text" name="product_code"
                                        id="product_code">
                                </div>

                                <div class="verification__form-submit">
                                    <button name="submit" type="submit">
                                        check verification
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-----bottom form-->
                    <div class="verification__form-image_form">
                        <img src="{{ asset('images/verification_bottom.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <!---Verification IMAGE---->
            <div class="verification__car">
                <div class="verification__car-image">
                    <img src="{{ asset('images/verification.PNG') }}" alt="">
                </div>

                <div class="verification__car-alert">
                    <div class="verification__car-alert-block">
                        <img class="verification__car-image-svg" src="{{ asset('images/verification_svg.svg') }}" alt="">
                        <div class="verification__car-alert-blur">

                        </div>
                        
                        <div class="verification__car-alert-content">
                            <div class="verification__car-message">
                                <img src="{{ asset('images/successs.png') }}" alt="">
                                <p>Top Notch Stock Resources</p>
                            </div>
                            <div class="verification__car-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor porta elit a posuere. Sed commodo nulla non sem commodo, ut pulvinar mauris eleifend. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
