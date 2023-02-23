<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'section',
        'blood_group',
        'identite_picture',
        'address',
        'gender',
    ];
    protected $casts = [

        'dob' => 'datetime:Y-m-d',

    ];
    public function overview()
    {
        return $this->hasOne(Overview_enfant::class);
    }
    public function relative()
    {
        return $this->belongsTo(Relative::class);
    }
    public function event()
    {
        return $this->hasMany(Event::class);
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }
    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }
    public function classroom()
    {
        return $this->hasOne(Classroom::class);
    }

}
