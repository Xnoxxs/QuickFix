<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/provider_card.css') }}">
    <title>Provider Card</title>
</head>
<body>
    <a href="{{ $link }}" class="provider-card-link">
        <div class="provider-card">
            <div class="provider-header">
                <img src="{{ $image }}" alt="Provider Profile">
                <span class="favorite">&#9825;</span>
            </div>
            <div class="provider-details">
                <h3>{{ $name }}</h3>
                <p class="job">Service: Electrician</p> <!-- Added the job text here -->
                <p class="location">&#x1F4CD; {{ $location }}</p>
                <div class="stats">
                    <span>&#9733; {{ $rating }}</span>
                    <span>{{ $reviews }} Reviews</span>
                    <span>{{ $jobs }} Jobs</span>
                </div>
                <p class="price"><strong>{{ $price }}</strong> per day</p>
            </div>
        </div>
    </a>
</body>
</html>
