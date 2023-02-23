<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable=[
        'designation',
        'reference',
        'type',
        'amount',
        'date',
        'notes',
    ];
    public function expense_category()
    {
        return $this->hasOne(Expense_category::class);
        
    }
}
