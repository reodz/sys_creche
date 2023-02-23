<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense_category extends Model
{
    use HasFactory;
    protected $fillable=[
        'season_name',
        'notes',
        'color',
        'season_id',
        'expense_id',
    ];
    public function season()
   {

    return $this->belongsTo(Season::class);
   }
}
