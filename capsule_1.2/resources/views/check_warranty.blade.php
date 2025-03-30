<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check Warranty</title>
    <link rel="icon" href="{{ asset('public/images/casule_favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('public/css/verification.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="verification__container">
        <div class="verification__wrapper">
            <!-- FORM -->
            <div class="verification__form">
                <div class="verification__form-absoluteimage">
                    <img src="{{ asset('public/images/background.png') }}" alt="">
                </div>
                <div class="verification__content">
                    <div class="verification__form-image">
                        <a href="{{ url(app()->getLocale()) }}">
                            <img src="{{ asset('public/images/logo_main.png') }}" alt="Capsule Logo">
                        </a>
                    </div>

                    <div class="verification__form-form">
                        <div class="verification__form-name">
                            <h2>Welcome to “Capsule”</h2>
                            <h3>Warranty Check System</h3>
                        </div>

                        <div class="verification__form-line">
                            <div class="verification__form-line-line"></div>
                            <div class="verification__form-text">Enter your client code</div>
                            <div class="verification__form-line-line"></div>
                        </div>

                        <div class="verification__form-formblock">
                            <form id="warrantyCheckForm">
                                @csrf
                                <div class="input__wrapper">
                                    <input type="text" name="client_code" id="client_code" placeholder="Enter client code" required>
                                </div>
                                <div class="verification__form-submit">
                                    <button type="submit">Check Warranty</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="verification__form-image_form">
                        <img src="{{ asset('public/images/verification_bottom.svg') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- RESULT DISPLAY -->
            <div class="verification__car">
                <div class="verification__car-image">
                    <img src="{{ asset('public/images/verification.PNG') }}" alt="">
                </div>
                <div class="verification__car-alert"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('#warrantyCheckForm');
            const input = document.querySelector('#client_code');
            const alertContainer = document.querySelector('.verification__car-alert');

            form.addEventListener('submit', async function (event) {
                event.preventDefault();
                const clientCode = input.value.trim();
                alertContainer.innerHTML = '';

                if (!clientCode) {
                    alertContainer.innerHTML = `
                        <div class="verification__car-alert-content">
                            <div class="verification__car-message">
                                <img src="{{ asset('public/images/error.png') }}" alt="">
                                <p>Please enter a client code.</p>
                            </div>
                        </div>`;
                    return;
                }

                try {
                    const response = await fetch("{{ route('user.check') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({ client_code: clientCode })
                    });

                    const data = await response.json();

                    if (data.exists) {
                        alertContainer.innerHTML = `
                            <div class="verification__car-alert-block">
                                <img class="verification__car-image-svg" src="{{ asset('public/images/verification_svg.svg') }}" alt="">
                                <div class="verification__car-alert-blur"></div>
                                <div class="verification__car-alert-content">
                                    <div class="verification__car-message">
                                        <img style="width: 26px;height: 27px;background-color: #fff;border-radius: 30px;" src="{{ asset('public/images/successs.png') }}" alt="">
                                        <p>Warranty Found!</p>
                                    </div>
                                    <div class="verification__car-text">
                                        <a href="${data.warranty_link}" target="_blank" style="color: #007bff; font-weight: bold;">
                                            View Warranty Details →
                                        </a>
                                    </div>
                                </div>
                            </div>`;
                    } else {
                        alertContainer.innerHTML = `
                            <div class="verification__car-alert-block">
                                <img class="verification__car-image-svg" src="{{ asset('public/images/verification_svg.svg') }}" alt="">
                                <div class="verification__car-alert-blur"></div>
                                <div class="verification__car-alert-content">
                                    <div style="background-color: #710000;" class="verification__car-message">
                                        <img style="width:25px; height: 25px;" src="{{ asset('public/images/failure.png') }}" alt="">
                                        <p style="color: #fff;">No warranty found with this client code.</p>
                                    </div>
                                    <div class="verification__car-text">
                                        Please check the code and try again. If the problem persists, contact your local Capsule representative.
                                    </div>
                                </div>
                            </div>`;
                    }
                } catch (error) {
                    alertContainer.innerHTML = `
                        <div class="verification__car-alert-content">
                            <div class="verification__car-message">
                                <img src="{{ asset('public/images/error.png') }}" alt="">
                                <p>An error occurred. Please try again later.</p>
                            </div>
                        </div>`;
                }
            });
        });
    </script>

</body>
</html>
