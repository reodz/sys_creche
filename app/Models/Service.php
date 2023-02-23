<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'season_name',
        'notes',
        'price',
        'duration',
        'subscription_id',
        'enfant_id',
    ];
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
