<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubsidyStatus;
use App\Models\Citizen;

class Subsidy extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function citizens(){
        return $this->belongsTo(Citizen::class);
    }

    public function subsidyStatus(){
        return $this->belongsTo(SubsidyStatus::class);
    }

}
