<?php

use App\Models\Services;
use App\Models\Bookings;
use App\Models\User;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {

    // Fetch all providers from the Users table
    $users = User::where('provider', true)->get();

    // Fetch all services from the Services table
    $services = Services::all();

    // Pass both users and services to the view
    return view('welcome', ['users' => $users, 'services' => $services]);
});

Route::get('/service-page', function (Request $request) {

    $service = $request->query('name'); // e.g., 'Electrician'

    // Fetch all providers from the Users table
    $users = User::where('provider', true)
                 ->where('service', $service)
                 ->get();

    // Pass both users and services to the view
    return view('service', ['users' => $users, 'service' => $service]);
});

Route::post('/book-service', function (Request $request) {
   
    // Validate input
    $request->validate([
        'date' => 'required|date',
        'time' => 'required',
        'name' => 'required|string',
        'price' => 'required|numeric',
        'providerId' => 'required|integer', // Ensure userId is included and valid
        'bookedBy' => 'required|integer', // Ensure bookedBy is included and valid

    ]);

    // Insert data into the Booking table
    Bookings::create([
        'date' => $request->input('date'),
        'time' => $request->input('time'),
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'providerId' => $request->input('providerId'), // Add userId here
        'bookedBy' => $request->input('bookedBy'), // Add userId here

    ]);

   return view('components.z_booking_success'); // Return the success view directly
});


Route::get('/example', function () {
    // Fetch all services from the database
    $services = Services::all();

    // Pass the services to the Blade view
    return view('example', ['services' => $services]);
});



Route::get('/provider-page', function (Request $request) {
    // Retrieve the 'id' query parameter
    $id = $request->query('id');

    // Fetch the user by id
    $user = User::find($id);

    // Check if the user exists
    if (!$user) {
        abort(404, 'User not found');
    }

    // Pass the user data to the Blade view
    return view('components.z_provider_page', compact('user'));
});



Route::get('/account', function () {
    if (!Auth::check()) {
        // Redirect to Laravel's login page if not logged in
        return redirect('/login');
    }

    // Get the current logged-in user ID
    $userId = Auth::id();

    // Fetch bookings where bookedBy matches the current user's ID
    $bookings = Bookings::with('user')->where('bookedBy', $userId)->get();

    // Pass the bookings to the Blade view
    return view('account', ['bookings' => $bookings]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



