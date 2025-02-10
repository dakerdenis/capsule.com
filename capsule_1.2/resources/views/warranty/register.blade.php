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
            <div class="logos_img ">
                <img src="{{ asset('images/warranty_logo.png') }}" alt="Capsule Logo">
            </div>
            <div class="logos_img">
                <img src="{{ asset($service->logo) }}" alt="Service Logo">
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
                            placeholder="Enter client phone number" required>
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
                <label for="installation-photos">Installation Photos (at least 1 required):</label>
                <div id="image-preview-container"></div>
                <!-- File input moved off-screen -->
                <input type="file" id="installation-photos" name="installation_photos[]" accept="image/*" style="position: absolute; left: -9999px;" multiple>
                <div class="add-photo-btn" onclick="document.getElementById('installation-photos').click()">
                    <span>+</span>
                </div>
            </div>
            




            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>


    <script>
document.addEventListener("DOMContentLoaded", function () {
    const warrantyForm = document.getElementById("warrantyForm");
    const fileInput = document.getElementById("installation-photos");
    const previewContainer = document.getElementById("image-preview-container");
    let uploadedFiles = []; // Store uploaded files

    console.log("DOM fully loaded and parsed. All elements ready!");

    // Ensure required elements exist
    if (!warrantyForm || !fileInput) {
        console.error("Form or file input element not found. Ensure IDs are correct.");
        return;
    }

    // Handle file selection
    function handleFileSelect(input) {
        const files = Array.from(input.files);
        console.log("Selected files:", files);

        // Check file limit
        if (uploadedFiles.length + files.length > 3) {
            alert("You can upload a maximum of 3 photos.");
            return;
        }

        files.forEach((file) => {
            if (!file.type.startsWith("image/")) {
                console.error("Invalid file type. Only images are allowed:", file);
                return;
            }

            uploadedFiles.push(file);

            const previewDiv = document.createElement("div");
            previewDiv.classList.add("image-preview");

            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement("img");
                img.src = e.target.result;
                img.alt = "Uploaded Photo";
                img.classList.add("preview-image");
                previewDiv.appendChild(img);
            };
            reader.readAsDataURL(file);

            const removeBtn = document.createElement("button");
            removeBtn.textContent = "X";
            removeBtn.classList.add("remove-image-btn");
            removeBtn.onclick = (event) => {
                event.preventDefault();
                previewDiv.remove();
                uploadedFiles = uploadedFiles.filter((f) => f !== file);
                console.log("File removed:", file.name);
            };

            previewDiv.appendChild(removeBtn);
            previewContainer.appendChild(previewDiv);
        });

        input.value = ""; // Reset input field
    }

    // Attach change listener to the file input
    fileInput.addEventListener("change", function () {
        console.log("File input changed.");
        handleFileSelect(this);
    });

    // Attach submit listener to the form
    warrantyForm.addEventListener("submit", function (event) {
        console.log("Form submission triggered.");
        console.log("Uploaded files:", uploadedFiles);

        if (uploadedFiles.length === 0) {
            alert("Please upload at least one photo.");
            console.error("Form submission blocked: No files uploaded.");
            event.preventDefault();
            return;
        }

        // Add files programmatically to the form's FormData
        const formData = new FormData(warrantyForm);
        uploadedFiles.forEach((file, index) => {
            formData.append(`installation_photos[${index}]`, file);
        });

        // Debug FormData
        for (let [key, value] of formData.entries()) {
            console.log(`FormData - ${key}:`, value);
        }

        // Submit the form explicitly
        fetch(warrantyForm.action, {
            method: "POST",
            body: formData,
        })
            .then((response) => {
                if (response.ok) {
                    console.log("Form submitted successfully!");
                    // Optionally, redirect or show success message
                } else {
                    console.error("Form submission failed:", response.statusText);
                    alert("There was an error submitting the form.");
                }
            })
            .catch((error) => {
                console.error("Error submitting form:", error);
                alert("There was a network error.");
            });

        event.preventDefault(); // Prevent default form submission
    });
});

    </script>


</body>

</html>
