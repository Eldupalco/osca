<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Citizen;
use App\Models\Subsidy;

class SubsidyStatus extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function citizens(){
        return $this->belongsTo(Citizen::class,'citizen_uid','id');
    }

    public function subsidy(){
        return $this->belongsTo(Subsidy::class, 'subsidy_uid','id');
    }
}
