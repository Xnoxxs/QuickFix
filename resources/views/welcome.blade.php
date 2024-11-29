<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickFix - Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
    <h1 class="brand">QuickFix</h1>
    <ul class="nav-links">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/account">Account</a></li>
    </ul>
</header>


    <div class="container">

        <!-- List of Services -->
        <div class="services">
            <h2>Available Services</h2>
            <div class="services-grid">

            @foreach ($services as $service)
            <x-z_service_card
                image="{{ $service->image }}"
                title="{{ $service->name }}" 
            />

                
            @endforeach
                </div>
            </div>

        <!-- Top Service Providers -->
        <div class="top-providers">
            <h2>Top Service Providers</h2>
            <div class="providers-grid">

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
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 QuickFix. All rights reserved.</p>
    </footer>
</body>
</html>
