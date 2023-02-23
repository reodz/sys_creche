<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card_identity_employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'type_of_card',
        'delivery_place',
        'delivery_date',
        'employee_id',
    ];
    protected $primaryKey='number';
}
