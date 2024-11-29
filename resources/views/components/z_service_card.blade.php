<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/service_card.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        .service-card {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .service-card i {
            font-size: 48px;
            color: #555;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
<div class="service-card">
    <!-- Mechanic Icon -->
    <i class="{{ $image }}"></i>
    <p>{{ $title }}</p>
</div>

</body>
</html>
