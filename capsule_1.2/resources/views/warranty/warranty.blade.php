<!-- resources/views/verification.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="{{ asset('public/css/verification.css') }}"> <!-- Link to warranty.css -->
    <link rel="stylesheet" href="{{ asset('public/css/warranty.css') }}"> <!-- Link to warranty.css -->
</head>
</head>

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
                            <form action="">
                                <div class="input__wrapper">

                                    <input placeholder="Login" type="email" name="login"
                                        id="login">
                                </div>
                                <div class="input__wrapper">

                                    <input placeholder="Password" type="password" name="password"
                                        id="password">
                                </div>

                                <div class="input__wrapper">
                                    <div class="input__wrapper-info">
                                        i
                                    </div>
                                    <input placeholder="Enter product code" type="text" name="product_code"
                                        id="product_code">
                                </div>

                                <div class="verification__form-submit">
                                    <button name="submit" type="submit">
                                        check warranty
                                    </button>
                                </div>

                            </form>
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
                    <img src="{{ asset('images/warranty_page.PNG') }}" alt="">
                </div>

                <div class="verification__car-alert">

                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('.verification__form-formblock form');
            const input = document.querySelector('#product_code');
            const alertContainer = document.querySelector('.verification__car-alert');
    
            form.addEventListener('submit', async function (event) {
                event.preventDefault(); // Prevent form submission
    
                const productCode = input.value.trim();
    
                // Clear previous messages
                alertContainer.innerHTML = '';
    
                if (!productCode) {
                    alertContainer.innerHTML = `
                        <div class="verification__car-alert-content">
                            <div class="verification__car-message">
                                <img src="{{ asset('images/error.png') }}" alt="">
                                <p>Please enter a product code.</p>
                            </div>
                        </div>
                    `;
                    return;
                }
    
                try {
                    const response = await fetch("{{ url('/api/verify-product') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token for security
                        },
                        body: JSON.stringify({ product_code: productCode }),
                    });
    
                    const data = await response.json();
    
                    if (data.success) {
                        alertContainer.innerHTML = `
                            <div class="verification__car-alert-block">
                                <img class="verification__car-image-svg" src="{{ asset('images/verification_svg.svg') }}" alt="">
                                <div class="verification__car-alert-blur"></div>
                                <div class="verification__car-alert-content">
                                    <div class="verification__car-message">
                                        <img src="{{ asset('images/successs.png') }}" alt="">
                                        <p>${data.message}</p>
                                    </div>
                                    <div class="verification__car-text">
                                        Product Code: ${data.product.code}<br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor porta elit a posuere. Sed commodo nulla non sem commodo, ut pulvinar mauris eleifend. 
                                    </div>
                                </div>
                            </div>
                        `;
                    } else {
                        alertContainer.innerHTML = `
                            <div class="verification__car-alert-block">
                                <img class="verification__car-image-svg" src="{{ asset('images/verification_svg.svg') }}" alt="">
                                <div class="verification__car-alert-blur"></div>
                                <div class="verification__car-alert-content">
                                    <div style="background-color: #710000;" class="verification__car-message">
                                        <img style="transform: rotate(180deg);" src="{{ asset('images/successs.png') }}" alt="">
                                        <p style="color: #fff;">${data.message}</p>
                                    </div>
                                    <div class="verification__car-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor porta elit a posuere. Sed commodo nulla non sem commodo, ut pulvinar mauris eleifend. 
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                } catch (error) {
                    alertContainer.innerHTML = `
                        <div class="verification__car-alert-content">
                            <div class="verification__car-message">
                                <img src="{{ asset('images/error.png') }}" alt="">
                                <p>An error occurred. Please try again later.</p>
                            </div>
                        </div>
                    `;
                }
            });
        });
    </script>
    
</body>

</html>
