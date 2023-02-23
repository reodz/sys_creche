<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_m_collegue extends Model
{
    use HasFactory;
    protected $fillable=[
        'web_site',
        'fb_page',
        'twiter_account',
        'insta_account',
        'youtube_channel',
        'tiktok_account',
        'collegue_id',
    ];
}
