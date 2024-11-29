<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">

</head>
<body>
<div class = "service-card">
    <a href="/service-page?name={{ urlencode($title) }}" class="service-link">
        <!-- Mechanic Icon -->
        <i class="{{ $image }}"></i>
        <p>{{ $title }}</p>
    </a>

</div>

</body>
</html>
