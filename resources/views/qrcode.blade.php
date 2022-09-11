<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header" >
                <h2 class="text-center">Your Qr Code is</h2>
            </div>
            <div class="text-center">
                {!! QrCode::size(300)->generate('www.google.com') !!}
            </div>
        </div>

    </div>
</body>
</html>
