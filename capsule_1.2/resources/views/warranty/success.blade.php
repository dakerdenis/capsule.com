<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Registration Success</title>
    <link rel="stylesheet" href="{{ asset('css/verification.css') }}">
    <link rel="stylesheet" href="{{ asset('css/warranty.css') }}">
</head>

<body>
    <div class="container">
        <div class="warranty__name-main">Warranty Registration Success</div>
        <div class="success-message">
            <h2>Thank you!</h2>
            <p>Your warranty registration was successful.</p>
            <p><strong>What to do next?</strong></p>
            <ul>
                <li>Download or print your warranty details.</li>
                <li>Keep this information for future reference.</li>
            </ul>
            <a href="{{ route('warranty') }}" class="back-btn">Back to Dashboard</a>
        </div>
    </div>
</body>

</html>
