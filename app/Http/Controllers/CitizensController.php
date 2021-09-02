<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Subsidy;
use App\Models\SubsidyStatus;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    //

    public function application(){
        return view('application-form');
    }

    public function register(){
        $citizens = Citizen::create($this->validateRequest());
        $this->storeImage($citizens);
        return redirect()->route('home');
    }

    public function login(Request $request){



        //   dd($subsidyStatus);
        if(Citizen::where('citizen_id',$request->citizen_id)->exists()){
            $citizens = Citizen::where('citizen_id',$request->citizen_id)->get();
            foreach($citizens as $data){
                $uid = $data->id;
            }
            $subsidyStatus = SubsidyStatus::where('citizen_uid',$uid)->get();
            return view('citizen-dashboard',compact('citizens','subsidyStatus'));
        }else{
            return back();
        }

    }

    private function validateRequest()
    {
        return request()->validate([
            'citizen_id' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix' => '',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'sex' => 'required',
            'civil_status' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'ips' => 'required',
            'religion' => 'required',
            'GSIS' => '',
            'SSS' => '',
            'TIN' => '',
            'PHILHEALTH' => '',
            'emergency_person' => 'required',
            'emergency_number' => 'required',
            'status' => 'required',
            'birth_certificate_image' => 'sometimes|file|image|max:5000',
            'citizen_id_image' => 'sometimes|file|image|max:5000'
        ]);
    }

    private function storeImage($citizens)
    {
        if (request()->has('birth_certificate_image') && request()->has('citizen_id_image')) {
            $citizens->update([
                'birth_certificate_image' => request()->birth_certificate_image->store('uploads', 'public'),
                'citizen_id_image' => request()->citizen_id_image->store('uploads', 'public')
            ]);
        }
    }
}
