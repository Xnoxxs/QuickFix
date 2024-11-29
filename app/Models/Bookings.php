<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

    // Disable timestamps
    public $timestamps = true;
    
    // Specify the table name if it's not 'bookings'
    protected $table = 'Bookings';

    // Fields that are mass-assignable
    protected $fillable = ['date', 'time', 'providerId','name', 'price', 'bookedBy'];

    // Relationship to Users table
    public function user()
    {
        return $this->belongsTo(User::class, 'bookedBy', 'id'); // bookedBy is the foreign key in Bookings, id is the primary key in Users
    }
}
