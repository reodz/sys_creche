<?php

namespace App\Http\Controllers;

use App\Models\Enfant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnfantController extends BaseController
{
    public function add_children(Request $request)
    {
       $request->validate([
        'first_name' => ['required'],
        'last_name' =>['required'],
        'gender' =>['required'],
        'dob' => ['date'],
        'address'=>['required'],
        'section' => ['required'],
        'blood_group'=> ['required'],
        'identite_picture'=> ['required'],
       ]);

       $picture = $request->file('identite_picture');
       $name = $picture->hashName();

       $upload = Storage::disk('public')->put("avatars/", $picture);

       $enfant = new Enfant();
       $enfant->first_name = $request->first_name;
       $enfant->last_name = $request->last_name;
       $enfant->gender = $request->gender;
       $enfant->dob = $request->dob;
       $enfant->address = $request->address;
       $enfant->section = $request->section;
       $enfant->blood_group = $request->blood_group;
       $enfant->identite_picture = asset("storage/avatars/{$name}");
       $enfant->save();
       return $this->sendError('success');

    }
}
