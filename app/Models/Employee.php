<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'dob',
        'birth_place',
        'phone_number',
        'identite_picture',
    ];
    public function other_employee()
    {
        return $this->hasOne(Other_employee::class);
    }
    public function card_identite()
    {
        return $this->hasOne(Card_identity_employee::class);
    }
    public function address()
    {
        return $this->hasOne(Address_employee::class);
    }
    public function classroom()
    {
        return $this->hasMany(Classroom::class);
    }
}
