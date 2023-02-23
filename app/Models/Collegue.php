<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegue extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'job',
        'phone',
        'identite_picture',
    ];
    public function social_media()
    {
        return $this->hasOne(Social_m_collegue::class);
    }
}
