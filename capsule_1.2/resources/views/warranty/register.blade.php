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
        <form action="{{ route('service.post_register') }}" method="POST" enctype="multipart/form-data">
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

            <div class="photo-upload">
                <label for="installation-photos">Installation Photos (at least 1 required):</label>
                <div id="image-preview-container">
                    <!-- Uploaded images will be displayed here -->
                </div>
            
                <!-- Hidden input for image uploads -->
                <input type="file" id="installation-photos" name="installation_photos[]" accept="image/*" onchange="handleFileSelect(this)" hidden multiple>
                
                <!-- Styled button to add images -->
                <div class="add-photo-btn" onclick="document.getElementById('installation-photos').click()">
                    <span>+</span>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>


    <script>
        let uploadedFiles = []; // Store uploaded file objects

function handleFileSelect(input) {
    const files = Array.from(input.files);

    // Check if total files exceed the limit of 3
    if (uploadedFiles.length + files.length > 3) {
        alert('You can upload a maximum of 3 photos.');
        return;
    }

    const previewContainer = document.getElementById('image-preview-container');

    files.forEach((file) => {
        if (uploadedFiles.length >= 3) return; // Limit to 3 images
        if (!file.type.startsWith('image/')) return; // Skip non-image files

        // Add file to the uploaded files array
        uploadedFiles.push(file);

        // Create the preview block
        const previewDiv = document.createElement('div');
        previewDiv.classList.add('image-preview');

        // Create an image element
        const reader = new FileReader();
        reader.onload = (e) => {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Uploaded Photo';
            img.classList.add('preview-image');
            previewDiv.appendChild(img);
        };
        reader.readAsDataURL(file);

        // Add a remove button
        const removeBtn = document.createElement('button');
        removeBtn.textContent = 'X';
        removeBtn.classList.add('remove-image-btn');
        removeBtn.onclick = () => {
            previewDiv.remove();
            uploadedFiles = uploadedFiles.filter((f) => f !== file); // Remove from array
        };

        previewDiv.appendChild(removeBtn);
        previewContainer.appendChild(previewDiv);
    });

    // Reset the input field to allow uploading the same file again
    input.value = '';
}

        function previewImages(input) {
            const previewContainer = document.getElementById('image-preview-container');
            previewContainer.innerHTML = ''; // Clear existing previews
    
            if (input.files && input.files.length > 0) {
                Array.from(input.files).forEach((file, index) => {
                    if (!file.type.startsWith('image/')) return; // Skip non-image files
    
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const previewDiv = document.createElement('div');
                        previewDiv.classList.add('image-preview');
    
                        // Image element
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = `Image ${index + 1}`;
                        img.classList.add('preview-image');
    
                        // Remove button
                        const removeBtn = document.createElement('button');
                        removeBtn.textContent = 'X';
                        removeBtn.classList.add('remove-image-btn');
                        removeBtn.onclick = () => {
                            previewDiv.remove();
                            input.value = ''; // Reset the file input
                        };
    
                        previewDiv.appendChild(img);
                        previewDiv.appendChild(removeBtn);
                        previewContainer.appendChild(previewDiv);
                    };
                    reader.readAsDataURL(file);
                });
            }
        }
    </script>
    

</body>

</html>
