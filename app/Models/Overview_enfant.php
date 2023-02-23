<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview_enfant extends Model
{
    use HasFactory;
    protected $fillable=[
        'Biographie',
            'diseases',
        'allergies',
            'food_habits',
           'behavior',
            'fears',
            'intrests',
            'enfant_id',
    ];
}
