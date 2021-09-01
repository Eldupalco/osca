<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    //

    public function register()
    {

       $data = request()->validate([
        'citizen_id' => 'required',
        'last_name' => 'required',
        'first_name' => 'required',
        'middle_name' => 'required',
        'suffix' => 'required',
        'birth_date' => 'required',
        'birth_place' => 'required',
        'sex' => 'required',
        'civil_status' => 'required',
        'email' => 'required',
        'contact_number' => 'required',
        'blood_type' => 'required',
        'religion' => 'required',
        'GSIS' => 'required',
        'SSS' => 'required',
        'TIN' => 'required',
        'PHILHEALTH' => 'required',
        'emergency_person' => 'required',
        'emergency_number' => 'required',
        'birth_certificate_image' => 'required',
        'citizen_id_image' => 'required',
        'status' => 'required',
       ]);
        Citizen::create($data);
    }
}
