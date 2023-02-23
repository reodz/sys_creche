<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_format',
        'language',
        'currency',
        'time_zone',
        'basic_info_id',
    ];
}
