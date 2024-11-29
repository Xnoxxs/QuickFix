<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'Services'; // Case-sensitive if your database requires it
}
