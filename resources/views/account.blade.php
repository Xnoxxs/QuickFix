<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Check</title>
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">

</head>
<body>

<!-- Navigation Button -->
<div class="back-button-container">
        <button onclick="window.location.href='/'" class="back-button">Go to Home</button>
    </div>
    
    <!-- Status Message -->
    <div class="status-container">
        <p class="status">Hello, <strong>Logged In</strong>.</p>
    </div>

    <!-- Bookings Section -->
    <div class="bookings-container">
        <div class="bookings-header">Your Bookings</div>
        @foreach ($bookings as $booking)
                <x-z_booking_card
                name="{{ $booking->name }}" 
                date="{{ $booking->date }}" 
                time="{{ $booking->time }}" 
                price="{{ $booking->price }}" 


                 /> 
            @endforeach
    </div>
</body>
</html>
