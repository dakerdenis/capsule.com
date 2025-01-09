<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Document Upload</title>

    <link rel="stylesheet" href="{{ asset('./public/css/warranty.css') }}">
</head>

<body>
    <div class="warranty-document__wrapper">
        <h1>Upload Warranty Documents</h1>
        <form method="POST" action="{{ route('upload.document') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="document">Upload Document</label>
                <input type="file" id="document" name="document" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit">Upload</button>
            </div>
        </form>
        @if (session('uploadedImageUrl'))
            <h2>Uploaded Image:</h2>
            <img src="{{ session('uploadedImageUrl') }}" alt="Uploaded Image">
        @endif
        @if ($errors->any())
            <div class="error-messages">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</body>


</html>
