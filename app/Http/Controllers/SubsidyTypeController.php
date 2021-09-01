<?php

namespace App\Http\Controllers;

use App\Models\Subsidy;
use App\Models\SubsidyType;
use Illuminate\Http\Request;

class SubsidyTypeController extends Controller
{
    public function show(){
        $subsidyType = SubsidyType::all();
        return view('admin.subsidy.subsidy-type', compact('subsidyType'));
    }

    public function create(){
        $user = SubsidyType::create($this->validateRequest());
        return back();
    }


    public function destroy(SubsidyType $subsidyType){
        $subsidyType->delete();
        return back();
    }

    private function validateRequest()
    {
        return request()->validate([
            'type' => 'required',
        ]);
    }
}
