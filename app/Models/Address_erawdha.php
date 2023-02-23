<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address_erawdha extends Model
{
    use HasFactory;
    protected $fillable=[
        'country',
        'wilaya',
        'city',
        'street',
        'house_number',
        'zipcode',
        'basic_info_id',
    ];
}
