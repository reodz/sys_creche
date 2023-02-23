<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address_employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'country',
        'wilaya',
        'city',
        'street',
        'house_number',
        'zipcode',
        'employee_id',
    ];
}
