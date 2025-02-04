<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsule Warranty Card</title>
    <link rel="stylesheet" href="{{ asset('css/verification.css') }}"> <!-- Link to warranty.css -->
    <link rel="stylesheet" href="{{ asset('css/warranty.css') }}"> <!-- Link to warranty.css -->

</head>

<body>
    <div class="container">
        <div class="warranty__name-main">Capsule Warranty Card</div>
    
        <div class="logos">
            <div class="logos_img logos_img-capsule">
                <img src="{{ asset('images/logo_main.png') }}" alt="Capsule Logo">
            </div>
            <div class="logos_img">
                <img src="{{ asset($service->logo) }}" alt="Service Logo">
            </div>
        </div>
    
        <h2 class="warranty__name-name">Client Information</h2>
        <form action="{{ route('service.post_register') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="form-row">
                <div class="form-group">
                    <label for="client-name">Client Name:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="client-name" name="client_name" placeholder="Enter client name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="client-phone">Client Phone Number:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="client-phone" name="client_phone" placeholder="Enter client phone number" required>
                    </div>
                   
                </div>
            </div>
    
            <h2 class="warranty__name-name">Car Information</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="car-model">Brand:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="car-model" name="car_model" placeholder="Enter car model" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="car-make">Model:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="car-make" name="car_make" placeholder="Enter car make" required>
                    </div>
                    
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group">
                    <label for="car-color">Car Color:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="car-color" name="car_color" placeholder="Enter car color" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="car-year">Year of Manufacture:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="car-year" name="car_year" placeholder="Enter year of manufacture" required>
                    </div>
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group">
                    <label for="license-plate">License Plate Number:</label> <!--NUmber of car--->
                    <div class="warranty-input-container">
                    <input type="text" id="license-plate" name="license_plate" placeholder="Enter license plate number" required>
                    </div>
                </div>
            </div>
    
            <h2 class="warranty__name-name">Installer Information</h2>
            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="service-name">Service Name:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="service-name" name="service_name" value="{{ $service->name }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="manager-name">Manager/Master Name:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="manager-name" name="manager_name" placeholder="Enter manager name" required>
                    </div>
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="service-phone">Service Phone Number:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="service-phone" name="service_phone" value="{{ $service->phone }}" readonly>
                    </div>
                </div>
                <div class="form-group non-editable">
                    <label for="license-number">License Number:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="license-number" name="license_number" value="{{ $licenseNumber }}" readonly>
                    </div>
                </div>
            </div>
    
            <div class="form-group non-editable">
                <label for="installation-date">Installation Date:</label>
                <div class="warranty-input-container">
                <input type="text" id="installation-date" name="installation_date" value="{{ $installationDate }}" readonly>
                </div>
            </div>
    
            <h2 class="warranty__name-name">Film and Warranty Information</h2>
            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="brand-name">Brand Name:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="brand-name" name="brand_name" value="Capsule" readonly>
                    </div>
                </div>
                <div class="form-group non-editable">
                    <label for="film-model">Film Model:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="film-model" name="film_model" value="{{ $filmModel }}" readonly>
                    </div>
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="warranty-period">Warranty Period:</label>
                    <div class="warranty-input-container">
                
                        <input type="text" id="warranty-period" name="warranty_period" value="{{ $warrantyPeriod }}" readonly>
                    </div>
                    </div>
                <div class="form-group non-editable">
                    <label for="service-life">Lifespan:</label>
                    <div class="warranty-input-container">
                    <input type="text" id="service-life" name="service-life" value="{{ $serviceLife }} Years" readonly>
                    </div>
                </div>
            </div>
    
            <div class="form-group non-editable">
                <label for="warranty-end-date">Warranty End Date:</label>
                <div class="warranty-input-container">
                <input type="text" id="warranty-end-date" name="warranty_end_date" value="{{ $warrantyEndDate }}" readonly>
                </div>
            </div>
    
            <div class="form-group non-editable">
                <label for="client-code">Client/Document Code:</label>
                <div class="warranty-input-container">
                <input type="text" id="client-code" name="client_code" value="{{ $clientCode }}" readonly>
                </div>
            </div>
    
            <div class="form-group photo-upload">
                <label for="installation-photos">Installation Photos:</label> <!---3 IMAGES--->
                <div class="warranty-input-container">
                <input type="file" id="installation-photos" name="installation_photos[]" multiple accept="image/*">
                </div>
                </div>
    
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
    
</body>

</html>