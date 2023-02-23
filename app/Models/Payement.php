<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $fillable=[
        'subscription',
        'payed_by',
        'amount',
        'date',
        'notes',
        'relative_id',
        'subscription_id',
    ];
    public function relative()
    {
        return $this->belongsTo(Relative::class);
    }
    public function subscription()
    {
        return $this->belongsto(Subscription::class);
    }
}
