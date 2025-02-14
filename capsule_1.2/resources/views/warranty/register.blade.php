<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsule Warranty Card</title>
    <link rel="stylesheet" href="{{ asset('public/css/verification.css') }}"> <!-- Link to warranty.css -->
    <link rel="stylesheet" href="{{ asset('public/css/warranty.css') }}"> <!-- Link to warranty.css -->
</head>

<body>
    <div class="container">
        <div class="warranty__name-main">Capsule Warranty Card</div>

        <div class="logos">
            <div class="logos_img ">
                <img src="{{ asset('public/images/warranty_logo.png') }}" alt="Capsule Logo">
            </div>
            <div class="logos_img">
                <img src="{{ asset('public/'.$service->logo) }}" alt="Service Logo">
            </div>
        </div>

        <h2 class="warranty__name-name">Client Information</h2>
        <form id="warrantyForm" action="{{ route('service.post_register') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="client-name">Client Name:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="client-name" name="client_name" placeholder="Enter client name"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="client-phone">Client Phone Number:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="client-phone" name="client_phone"
                            placeholder="994000000000" required>
                    </div>
                    <small id="phone-error" class="error-message"></small>
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
                        <input type="text" id="car-year" name="car_year" placeholder="Enter year of manufacture"
                            required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="license-plate">License Plate Number:</label> <!--NUmber of car--->
                    <div class="warranty-input-container">
                        <input type="text" id="license-plate" name="license_plate"
                            placeholder="Enter license plate number" required>
                    </div>
                </div>
            </div>

            <h2 class="warranty__name-name">Installer Information</h2>
            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="service-name">Service Name:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="service-name" name="service_name" value="{{ $service->name }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="manager-name">Manager/Master Name:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="manager-name" name="manager_name" placeholder="Enter manager name"
                            required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="service-phone">Service Phone Number:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="service-phone" name="service_phone" value="{{ $service->phone }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group non-editable">
                    <label for="license-number">Product Code:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="license-number" name="license_number" value="{{ $productCode }}"
                            readonly>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="service_country">Country of service:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="service_country" name="service_country"
                            value="{{ $service->country }}" readonly>
                    </div>
                </div>
                <div class="form-group non-editable">
                    <label for="service_city">City of service:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="service_city" name="service_city" value="{{ $service->city }}"
                            readonly>
                    </div>
                </div>

            </div>

            <div class="form-group non-editable">
                <label for="installation-date">Installation Date:</label>
                <div class="warranty-input-container">
                    <input type="text" id="installation-date" name="installation_date"
                        value="{{ $installationDate }}" readonly>
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
                        <input type="text" id="film-model" name="film_model" value="{{ $filmModel }}"
                            readonly>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group non-editable">
                    <label for="warranty-period">Warranty Period:</label>
                    <div class="warranty-input-container">

                        <input type="text" id="warranty-period" name="warranty_period"
                            value="{{ $warrantyPeriod }}" readonly>
                    </div>
                </div>
                <div class="form-group non-editable">
                    <label for="service-life">Lifespan:</label>
                    <div class="warranty-input-container">
                        <input type="text" id="service-life" name="service-life"
                            value="{{ $serviceLife }} Years" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group non-editable">
                <label for="warranty-end-date">Warranty End Date:</label>
                <div class="warranty-input-container">
                    <input type="text" id="warranty-end-date" name="warranty_end_date"
                        value="{{ $warrantyEndDate }}" readonly>
                </div>
            </div>

            <div class="form-group non-editable">
                <label for="client-code">Client/Document Code:</label>
                <div class="warranty-input-container">
                    <input type="text" id="client-code" name="client_code" value="{{ $clientCode }}" readonly>
                </div>
            </div>
            <!-- Form Fields -->
            <div class="photo-upload">
                <label for="image-input-1">Installation Photo 1 (Mandatory):</label>
                <input type="file" id="image-input-1" name="installation_photos[]" accept="image/*" required>
                <div id="image-preview-container-1" class="image-preview-container-1"></div>
            </div>

            <div class="photo-upload">
                <label for="image-input-2">Installation Photo 2 (Optional):</label>
                <input type="file" id="image-input-2" name="installation_photos[]" accept="image/*">
                <div id="image-preview-container-2" class="image-preview-container-2"></div>
            </div>

            <div class="photo-upload">
                <label for="image-input-3">Installation Photo 3 (Optional):</label>
                <input type="file" id="image-input-3" name="installation_photos[]" accept="image/*">
                <div id="image-preview-container-3" class="image-preview-container-3"></div>
            </div>





            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Add functionality for each file input
            const fileInputs = [{
                    id: "image-input-1",
                    container: "image-preview-container-1"
                },
                {
                    id: "image-input-2",
                    container: "image-preview-container-2"
                },
                {
                    id: "image-input-3",
                    container: "image-preview-container-3"
                }
            ];

            fileInputs.forEach(({
                id,
                container
            }) => {
                const input = document.getElementById(id);
                const previewContainer = document.getElementById(container);

                input.addEventListener("change", function() {
                    const file = input.files[0];

                    // Clear previous preview
                    previewContainer.innerHTML = "";

                    if (file && file.type.startsWith("image/")) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const previewDiv = document.createElement("div");
                            previewDiv.classList.add("image-preview");

                            const img = document.createElement("img");
                            img.src = e.target.result;
                            img.alt = "Uploaded Image";

                            const removeBtn = document.createElement("button");
                            removeBtn.classList.add("remove-image-btn");
                            removeBtn.innerText = "X";
                            removeBtn.addEventListener("click", function(event) {
                                event.preventDefault();
                                previewContainer.innerHTML = ""; // Clear preview
                                input.value = ""; // Clear input
                            });

                            previewDiv.appendChild(img);
                            previewDiv.appendChild(removeBtn);
                            previewContainer.appendChild(previewDiv);
                        };

                        reader.readAsDataURL(file);
                    } else if (file) {
                        alert("Only image files are allowed.");
                        input.value = "";
                    }
                });
            });

            // Form submission handler (for debugging purposes)
            const warrantyForm = document.getElementById("warrantyForm");
            warrantyForm.addEventListener("submit", function(event) {
                console.log("Form submitted!");
                const mandatoryInput = document.getElementById("image-input-1");

                if (!mandatoryInput.files.length) {
                    alert("Please upload an image for the first input.");
                    event.preventDefault();
                }
            });
        });
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const phoneInput = document.getElementById("client-phone");
        const phoneError = document.getElementById("phone-error");

        phoneInput.addEventListener("input", function() {
            const phonePattern = /^994\d{9}$/; // Regex: 994 followed by exactly 9 digits
            const phoneNumber = phoneInput.value.trim();

            if (!phonePattern.test(phoneNumber)) {
                phoneError.textContent = "Invalid phone number. Format: 994123456789";
                phoneError.style.color = "red";
                phoneInput.style.border = "2px solid red";
            } else {
                phoneError.textContent = ""; // Clear error message
                phoneInput.style.border = "2px solid green";
            }
        });

        // Prevent form submission if phone is invalid
        document.getElementById("warrantyForm").addEventListener("submit", function(event) {
            if (!/^994\d{9}$/.test(phoneInput.value.trim())) {
                phoneError.textContent = "Please enter a valid phone number (994123456789).";
                phoneError.style.color = "red";
                phoneInput.style.border = "2px solid red";
                event.preventDefault();
            }
        });
    });
</script>


</body>

</html>
