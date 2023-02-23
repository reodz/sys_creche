<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable=[
        'season_name',
        'notes',
        'age_range',
        'classroom_id',
    ];
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
