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
                <img src="{{ asset($warranty->service->logo) }}" alt="Service Logo">
            </div>
        </div>

        <h2 class="warranty__name-name">Client Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label for="client-name">Client Name:</label>
                <div class="warranty-input-container">
                    <input type="text" id="client-name" name="client_name" value="{{ $warranty->client_name }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="client-phone">Client Phone Number:</label>
                <div class="warranty-input-container">
                    <input type="text" id="client-phone" name="client_phone" value="{{ $warranty->client_number }}" readonly>
                </div>
            </div>
        </div>

        <h2 class="warranty__name-name">Car Information</h2>
        <div class="form-row">
            <div class="form-group">
                <label for="car-model">Brand:</label>
                <div class="warranty-input-container">
                    <input type="text" id="car-model" name="car_model" value="{{ $warranty->car_model }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="car-make">Model:</label>
                <div class="warranty-input-container">
                    <input type="text" id="car-make" name="car_make" value="{{ $warranty->car_make }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="car-color">Car Color:</label>
                <div class="warranty-input-container">
                    <input type="text" id="car-color" name="car_color" value="{{ $warranty->car_color }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="car-year">Year of Manufacture:</label>
                <div class="warranty-input-container">
                    <input type="text" id="car-year" name="car_year" value="{{ $warranty->manufacture_year }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="license-plate">License Plate Number:</label>
                <div class="warranty-input-container">
                    <input type="text" id="license-plate" name="license_plate" value="{{ $warranty->license_plate_number }}" readonly>
                </div>
            </div>
        </div>

        <h2 class="warranty__name-name">Installer Information</h2>
        <div class="form-row">
            <div class="form-group non-editable">
                <label for="service-name">Service Name:</label>
                <div class="warranty-input-container">
                    <input type="text" id="service-name" name="service_name" value="{{ $warranty->service->name }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="manager-name">Manager/Master Name:</label>
                <div class="warranty-input-container">
                    <input type="text" id="manager-name" name="manager_name" value="{{ $warranty->master_name }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group non-editable">
                <label for="service-phone">Service Phone Number:</label>
                <div class="warranty-input-container">
                    <input type="text" id="service-phone" name="service_phone" value="{{ $warranty->service_phone_number }}" readonly>
                </div>
            </div>
            <div class="form-group non-editable">
                <label for="license-number">Product Code:</label>
                <div class="warranty-input-container">
                    <input type="text" id="license-number" name="license_number" value="{{ $warranty->product_code }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-group non-editable">
            <label for="installation-date">Installation Date:</label>
            <div class="warranty-input-container">
                <input type="text" id="installation-date" name="installation_date" value="{{ $warranty->installation_date }}" readonly>
            </div>
        </div>

        <h2 class="warranty__name-name">Film and Warranty Information</h2>
        <div class="form-row">
            <div class="form-group non-editable">
                <label for="brand-name">Brand Name:</label>
                <div class="warranty-input-container">
                    <input type="text" id="brand-name" name="brand_name" value="{{ $warranty->brand_name }}" readonly>
                </div>
            </div>
            <div class="form-group non-editable">
                <label for="film-model">Film Model:</label>
                <div class="warranty-input-container">
                    <input type="text" id="film-model" name="film_model" value="{{ $warranty->film_model }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group non-editable">
                <label for="warranty-period">Warranty Period:</label>
                <div class="warranty-input-container">
                    <input type="text" id="warranty-period" name="warranty_period" value="{{ $warranty->warranty_model }}" readonly>
                </div>
            </div>
            <div class="form-group non-editable">
                <label for="service-life">Lifespan:</label>
                <div class="warranty-input-container">
                    <input type="text" id="service-life" name="service_life" value="{{ $warranty->service_life }}" readonly>
                </div>
            </div>
        </div>
        <div class="form-group non-editable">
            <label for="warranty-end-date">Warranty End Date:</label>
            <div class="warranty-input-container">
                <input type="text" id="warranty-end-date" name="warranty_end_date" value="{{ $warranty->warranty_end_date }}" readonly>
            </div>
        </div>

        <h2 class="warranty__name-name">Client Code</h2>
        <div class="form-group non-editable">
            <label for="client-code">Client/Document Code:</label>
            <div class="warranty-input-container">
                <input type="text" id="client-code" name="client_code" value="{{ $warranty->client_code }}" readonly>
            </div>
        </div>

        <div class="button-container" style="margin-top: 20px;">
            <a href="{{ route('service.warranty.pdf', $warranty->id) }}" class="btn btn-primary">Save as PDF</a>
            <button id="print" class="button" onclick="window.print();">Print</button>
            <button id="share-whatsapp" class="button" onclick="shareViaWhatsApp()">Share to WhatsApp</button>
            <button id="share-telegram" class="button" onclick="shareViaTelegram()">Share to Telegram</button>
        </div>
    </div>

    <script>
        // Save as PDF
        document.getElementById('save-pdf').addEventListener('click', function () {
            const element = document.querySelector('.container'); // Select the container to export
            const opt = {
                margin: 1,
                filename: 'Capsule_Warranty_Card.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().set(opt).from(element).save();
        });

        // Share to WhatsApp
        function shareViaWhatsApp() {
            const url = encodeURIComponent(window.location.href);
            const message = encodeURIComponent("Check out this warranty card: ");
            window.open(`https://wa.me/?text=${message}${url}`, '_blank');
        }

        // Share to Telegram
        function shareViaTelegram() {
            const url = encodeURIComponent(window.location.href);
            const message = encodeURIComponent("Check out this warranty card: ");
            window.open(`https://t.me/share/url?url=${url}&text=${message}`, '_blank');
        }
    </script>
</body>

</html>
