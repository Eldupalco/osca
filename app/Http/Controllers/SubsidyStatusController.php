<?php

namespace App\Http\Controllers;

use App\Models\SubsidyStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubsidyStatusController extends Controller
{
 public function AssignedStatus(SubsidyStatus $status)
 {

    $status->update($this->validateRequest());
     return back();
 }

 private function validateRequest()
 {
     return request()->validate([
         'status_receive' => '',
         'date_receive' => '',
     ]);
 }
}
