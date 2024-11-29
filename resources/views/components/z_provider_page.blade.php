<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/provider_card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/provider_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css"> <!-- Flatpickr for date-time picker -->
    <title>Service Provider</title>
</head>
<body>
    <div class="container">
        <h1>Service Provider</h1>

        <!-- Service Provider Card -->
        <x-z_provider_card
            link="{{ url('/provider-page?id=' . $user->id) }}" 
            image="{{ $user->image }}" 
            name="{{ $user->name }}" 
            location="{{ $user->location }}" 
            rating="{{ $user->rating }}" 
            reviews="{{ $user->reviews }}" 
            jobs="{{ $user->jobs }}" 
            price="{{ $user->price }}" 
        />


        <!-- Booking Form -->
        <form action="{{ url('/book-service') }}" method="POST" class="booking-form">
    @csrf <!-- Laravel CSRF protection -->
    
    <label for="date">Choose a Date:</label>
    <input type="text" id="date" name="date" class="date-picker" required>

    <label for="time">Choose a Time:</label>
    <select id="time" name="time" required>
        <option value="09:00">09:00 AM</option>
        <option value="10:00">10:00 AM</option>
        <option value="11:00">11:00 AM</option>
        <option value="12:00">12:00 PM</option>
        <option value="13:00">01:00 PM</option>
        <option value="14:00">02:00 PM</option>
        <option value="15:00">03:00 PM</option>
        <option value="16:00">04:00 PM</option>
        <option value="17:00">05:00 PM</option>
    </select>

    <!-- Hidden fields for name and price -->
    <input type="hidden" name="name" value="{{ $user->name }}">
    <input type="hidden" name="price" value="{{ $user->price }}">
    <input type="hidden" name="providerId" value="{{ $user->id }}">
    <input type="hidden" name="bookedBy" value="{{ Auth::id() }}">



    <button type="submit" class="btn btn-primary">Book Service</button>
</form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <script>
        // Initialize Flatpickr date picker
        flatpickr(".date-picker", {
            dateFormat: "Y-m-d",
            minDate: "today", // Disable past dates
        });
    </script>
</body>
</html>
