<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id'; // We can change primary to whatever if we wanted.
    // protected $primaryKey = false ; // Used if you do not need a primary.

    // protected $timestamps = true;
    // protected $dateformat = 'h:m:s'; // Format the timestamp
}
