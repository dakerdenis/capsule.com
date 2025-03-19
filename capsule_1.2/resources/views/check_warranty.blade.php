<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Warranty</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error-message { color: red; font-size: 14px; margin-top: 5px; }
        .success-message { color: green; font-size: 16px; margin-top: 10px; font-weight: bold; }
        .hidden { display: none; }
    </style>
</head>
<body>

    <h2>Check Your Warranty</h2>
    
    <form id="warranty-check-form">
        @csrf
        <label for="client_number">Enter Your Phone Number:</label>
        <input type="text" id="client_number" name="client_number" required>
        <button type="submit">Check Warranty</button>
        <p id="error-message" class="error-message hidden"></p>
    </form>

    <div id="warranty-result" class="hidden">
        <h3 class="success-message">Warranty Found!</h3>
        <p><strong>Client Name:</strong> <span id="client_name"></span></p>
        <p><strong>Car Model:</strong> <span id="car_model"></span></p>
        <p><strong>Car Make:</strong> <span id="car_make"></span></p>
        <p><strong>Car Color:</strong> <span id="car_color"></span></p>
        <p><strong>Installation Date:</strong> <span id="installation_date"></span></p>
        <p><strong>Warranty End Date:</strong> <span id="warranty_end_date"></span></p>
    </div>

    <script>
$(document).ready(function () {
    $("#warranty-check-form").on("submit", function (event) {
        event.preventDefault();

        let clientNumber = $("#client_number").val().trim();
        let errorMessage = $("#error-message");
        let warrantyResult = $("#warranty-result");

        if (clientNumber === "") {
            errorMessage.text("Please enter a phone number.").removeClass("hidden");
            warrantyResult.addClass("hidden");
            return;
        }

        $.ajax({
            url: "{{ route('user.check') }}", // ✅ Uses named route
            type: "POST",
            data: {
                client_number: clientNumber,
                _token: "{{ csrf_token() }}"
            },
            success: function (response) {
                if (response.exists) {
                    errorMessage.addClass("hidden");

                    // ✅ Display warranty link instead of details
                    warrantyResult.html(
                        `<h3 class="success-message">Warranty Found!</h3>
                         <p><a href="${response.warranty_link}" target="_blank">View Warranty</a></p>`
                    ).removeClass("hidden");

                } else {
                    warrantyResult.addClass("hidden");
                    errorMessage.text(response.message).removeClass("hidden");
                }
            },
            error: function () {
                warrantyResult.addClass("hidden");
                errorMessage.text("An error occurred. Please try again.").removeClass("hidden");
            }
        });
    });
});

    </script>

</body>
</html>
