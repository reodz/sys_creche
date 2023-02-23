<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable=[
        'enfant',
        'service',
        'start_date',
        'expire_date',
        'total',
        'discount',
        'notes',
        'children_id',
        'relative_id',
    ];
    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
    public function relative()
    {
        return $this->belongsTo(Relative::class);
    }
    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
