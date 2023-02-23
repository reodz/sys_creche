<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic_info extends Model
{
    use HasFactory;
    protected $fillable=[
        'company_name',
        'type',
        'size',
        'slogan',
        'email',
        'phone',
        'fax',
        'logo',
    ];
    public function other_detail()
    {
        return $this->hasOne(Other_detail::class);
    }
    public function address()
    {
        return $this->hasOne(Address_erawdha::class);
    }
    public function social_media()
    {
        return $this->hasOne(Social_m_erawdha::class);
    }
    public function localisation()
    {
        return $this->hasOne(Localisation::class);
    }
}
