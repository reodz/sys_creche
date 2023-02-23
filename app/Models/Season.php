<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable=[
        'season_name',
        'notes',
        'start_date',
        'end_date',
        'service_id',
        'section_id',
    ];
}
