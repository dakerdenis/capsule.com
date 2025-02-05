<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty #{{ $warranty->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        h2 {
            color: #333333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        .warranty__name-main {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #555555;
        }

        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #555555;
            display: block;
        }
        .form-group p {
            font-size: 14px;
            color: #333333;
            background: #f2f2f2;
            padding: 8px;
            border-radius: 4px;
            margin: 0;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
        }
        .form-row .form-group {
            flex: 0 0 48%;
        }

    .logos{
        display: flex;
        width:100%;
        justify-content: space-between;
        height: 80px;
        margin-bottom: 10px;
        margin-top: 20px;
    }
    .logos_img{
        height: 80px;

    }
    img {
            height: 100%;
  object-fit: contain;
}
    .logos_img-capsule{
        
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="warranty__name-main">Capsule Warranty Card</div>

        <div class="logos">
            <div class="logos_img logos_img-capsule">
                <img src="{{ public_path('images/logo_main.png') }}" alt="Capsule Logo">
            </div>
            <div class="logos_img">
                <!---img src="{{ public_path($warranty->service->logo) }}" alt="Service Logo"-->
            </div>
        </div>

        <h2>Client Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label>Client Name:</label>
                <p>{{ $warranty->client_name }}</p>
            </div>
            <div class="form-group">
                <label>Client Phone Number:</label>
                <p>{{ $warranty->client_number }}</p>
            </div>
        </div>

        <h2>Car Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label>Brand:</label>
                <p>{{ $warranty->car_model }}</p>
            </div>
            <div class="form-group">
                <label>Model:</label>
                <p>{{ $warranty->car_make }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Car Color:</label>
                <p>{{ $warranty->car_color }}</p>
            </div>
            <div class="form-group">
                <label>Year of Manufacture:</label>
                <p>{{ $warranty->manufacture_year }}</p>
            </div>
        </div>
        <div class="form-group">
            <label>License Plate Number:</label>
            <p>{{ $warranty->license_plate_number }}</p>
        </div>

        <h2>Installer Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label>Service Name:</label>
                <p>{{ $warranty->service->name }}</p>
            </div>
            <div class="form-group">
                <label>Manager/Master Name:</label>
                <p>{{ $warranty->master_name }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Service Phone Number:</label>
                <p>{{ $warranty->service_phone_number }}</p>
            </div>
            <div class="form-group">
                <label>Product Code:</label>
                <p>{{ $warranty->product_code }}</p>
            </div>
        </div>
        <div class="form-group">
            <label>Installation Date:</label>
            <p>{{ $warranty->installation_date }}</p>
        </div>

        <h2>Film and Warranty Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label>Brand Name:</label>
                <p>{{ $warranty->brand_name }}</p>
            </div>
            <div class="form-group">
                <label>Film Model:</label>
                <p>{{ $warranty->film_model }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Warranty Period:</label>
                <p>{{ $warranty->warranty_model }}</p>
            </div>
            <div class="form-group">
                <label>Lifespan:</label>
                <p>{{ $warranty->service_life }}</p>
            </div>
        </div>
        <div class="form-group">
            <label>Warranty End Date:</label>
            <p>{{ $warranty->warranty_end_date }}</p>
        </div>

        <h2>Client Code</h2>
        <div class="form-group">
            <label>Client/Document Code:</label>
            <p>{{ $warranty->client_code }}</p>
        </div>
    </div>
</body>
</html>
