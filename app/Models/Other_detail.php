<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other_detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'RC',
        'nif',
        'nis',
        'basic_info_id',
    ];
}
