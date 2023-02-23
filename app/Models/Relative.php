<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'emploi',
        'email',
        'phone_number',
        'fix_number',
        'identite_picture',
        'enfant_id'
    ];

    
}
