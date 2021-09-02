<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function index()
    {
        $citizensActive = Citizen::CountActive();
        $citizensDecease = Citizen::CountDecease();
        $citizensPending = Citizen::CountPending();

        $citizens = Citizen::Pending()->get();

        $Months = DB::select(DB::raw("SELECT
        subsidies.subsidy_type,
        to_char(subsidies.subsidy_date, 'Month')as Month,
        COUNT(subsidy_statuses.date_receive) AS TotalReceive,
        subsidy_statuses.status_receive
    FROM
        subsidies
        INNER JOIN
        subsidy_statuses
        ON
            subsidies.id = subsidy_statuses.subsidy_uid
    WHERE
        subsidy_statuses.status_receive = 'Claimed'
    GROUP BY
        subsidies.subsidy_date,
        subsidies.subsidy_type,
        subsidy_statuses.status_receive"));
        return view('admin.index', compact('citizensActive', 'citizensDecease', 'citizensPending', 'Months','citizens'));
    }

    public function applicationForm()
    {
        return view('admin.citizens.citizens-register');
    }

    public function register()
    {
        $citizen=Citizen::create($this->validateRequest());

        $this->storeImage($citizen);

        return redirect()->route('admin.records');
    }


    public function edit(Citizen $citizens)
    {
        return view('admin.citizens.citizens-edit', compact('citizens'));
    }

    public function update(Citizen $citizens)
    {
        $citizens->update($this->validateRequest());
        $this->storeImage($citizens);
        return redirect()->route('admin.records');
    }

    public function destroy(Citizen $citizens)
    {
        $citizens->delete();
        return back();
    }

    public function records()
    {
        $citizens = Citizen::Active()->get();
        return view('admin.citizens.citizens-records', compact('citizens'));
    }

    public function pendingRequest()
    {
        $citizens = Citizen::Pending()->get();
        return view('admin.citizens.citizens-records', compact('citizens'));
    }


    public function record(Request $request)
    {
        $status = $request->input('status');
        $data['citizensActive'] = $status;
        dd($data);
        // $citizens = Citizen::Active()->get();
        // return view('admin.view-records',compact('citizens'));
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
