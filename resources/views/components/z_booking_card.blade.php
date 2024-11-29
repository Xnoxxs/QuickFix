<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/booking_card.css') }}">
    <title>Booking Details</title>

</head>
<body>
    <div class="booking-container">

        <div class="booking-row">
            <div class="booking-detail">
                <h3>Name</h3>
                <span>{{ $name }}</span>
            </div>
            <div class="booking-detail">
                <h3>Date</h3>
                <span>{{ $date }}</span>
            </div>
            <div class="booking-detail">
                <h3>Time</h3>
                <span>{{ $time }}</span>
            </div>
            <div class="booking-detail">
                <h3>Price</h3>
                <span>{{ $price }}</span>
            </div>
        </div>
    </div>
</body>
</html>
