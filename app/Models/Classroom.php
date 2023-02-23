<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'capacity',
        'section',
        'enfant_id',
        'employee_id',
    ];
    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function section()
    {
        return $this->hasOne(Section::class);
    }
}
