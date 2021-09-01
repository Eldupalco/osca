<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Subsidy;
use App\Models\SubsidyStatus;
use App\Models\SubsidyType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\VarDumper\Cloner\Data;

class SubsidyController extends Controller
{
    //
    public function show()
    {
        $subsidyType = SubsidyType::all();
        $subsidy = Subsidy::all();
        return view('admin.subsidy.subsidy-records', compact('subsidy', 'subsidyType'));
    }

    public function citizenSubsidiesStatus($subsidy)
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $subsidies = SubsidyStatus::where('subsidy_uid', $subsidy)->get();
        return view('admin.subsidy.subsidy-citizens-status', compact('subsidies','todayDate'));
    }

    public function assignCitizenSubsidies()
    {
        $citizens = Citizen::Active()->get();
        $subsidyType = SubsidyType::all();
        return view('admin.subsidy.subsidy-assignment', compact('subsidyType', 'citizens'));
    }

    public function assignedCitizenSubsidies(Request $request)
    {

        $subsidies  = new Subsidy();
        $subsidies->subsidy_type = request()->subsidy_type;
        $subsidies->subsidy_description = request()->subsidy_description;
        $subsidies->subsidy_date = request()->subsidy_date;

        $subsidies->save();
        $subsidies->id;


        if (isset(request()->Supported)) {

            $data = Citizen::Supported()->get();

            foreach ($data as $result) {
                $items[] = $result->id;
            }

            for ($i = 0; $i < count($items); $i++) {
                $pointData[] = [
                    'citizen_uid' => $items[$i],
                    'subsidy_uid' =>  $subsidies->id,
                    'status_receive' =>  'not yet',
                    'date_receive' => '2021-08-24',
                ];
            }

            SubsidyStatus::insert($pointData);
        } else if (isset(request()->Indigent)) {

            $data = Citizen::Indigent()->get();

            foreach ($data as $result) {
                $items[] = $result->id;
            }

            for ($i = 0; $i < count($items); $i++) {
                $pointData[] = [
                    'citizen_uid' => $items[$i],
                    'subsidy_uid' =>  $subsidies->id,
                    'status_receive' =>  'not yet',
                    'date_receive' => '2021-08-24',

                ];
            }

            SubsidyStatus::insert($pointData);
        } else if (isset(request()->Pensioner)) {



            $data = Citizen::Pensioner()->get();

            foreach ($data as $result) {
                $items[] = $result->id;
            }

            for ($i = 0; $i < count($items); $i++) {
                $pointData[] = [
                    'citizen_uid' => $items[$i],
                    'subsidy_uid' =>  $subsidies->id,
                    'status_receive' =>  'not yet',
                    'date_receive' => '2021-08-24',

                ];
            }

            SubsidyStatus::insert($pointData);
        }
         else {
            $data = request()->religion;
        }
        return back();
    }
}
