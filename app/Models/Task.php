<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
        'task_name',
        'date',
        'status',
        'priority',
        'tags',
        'notes',
        'children',
        'employees',
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
}
