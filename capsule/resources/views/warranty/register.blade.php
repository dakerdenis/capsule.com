<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Registration</title>

    <link rel="stylesheet" href="{{ asset('./public/css/warranty.css') }}"> <!-- Link to warranty.css -->
</head>

<body>
    <div class="warranty-register__wrapper">
        <h1>Warranty Registration</h1>
        <p>Register your product warranty to receive premium support and services.</p>

        <form method="POST" action="">
            @csrf <!-- Include CSRF token -->

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="product_serial">Product Serial Number</label>
                <input type="text" id="product_serial" name="product_serial" placeholder="Enter product serial number" required>
            </div>

            <div class="form-group">
                <label for="purchase_date">Purchase Date</label>
                <input type="date" id="purchase_date" name="purchase_date" required>
            </div>

            <div class="form-group">
                <button type="submit">Register Warranty</button>
            </div>
        </form>
    </div>
</body>

</html>
