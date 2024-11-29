<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Providers</title>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}"> <!-- Adjust path as needed -->
</head>
<body>

    <!-- Main Container -->
    <div class="container">
        <div class="page-header">
            <h1>Available "{{ $service }}"</h1>
            <p>Find the best service providers for your needs.</p>
        </div>
        <div class="provider-grid">
            @foreach ($users as $user)
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
            @endforeach
        </div>
    </div>

</body>
</html>
