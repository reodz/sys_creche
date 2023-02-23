<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other_employee extends Model
{
    use HasFactory;
    protected $primaryKey='ssn';
    protected $fillable=[
        'biography',
        'job',
        'salary',
        'start_date',
        'family_situation',
        'cv',
        'eployee_id',
    ];

}
