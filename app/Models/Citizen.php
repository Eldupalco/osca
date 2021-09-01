<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subsidy;
use App\Models\SubsidyStatus;

class Citizen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive($query){
        // return $query->where('status', 'Active')->orWhere('status', 'Decease');
        return $query->where('status', 'Active');
    }
    public function scopePending($query){
        return $query->where('status', 'Pending');
    }


    public function scopeCountActive($query){
        return $query->where('status', 'Active')->count();
    }
    public function scopeCountDecease($query){
        return $query->where('status', 'Decease')->count();
    }
    public function scopeCountPending($query){
        return $query->where('status', 'Pending')->count();
    }


    public function scopeSupported($query){
        return $query->where('ips', 'Supported');
    }

    public function scopePensioner($query){
        return $query->where('ips', 'Pensioner');
    }

    public function scopeIndigent($query){
        return $query->where('ips', 'Indigent');
    }

    // public function subsidy(){
    //     return $this->belongsTo(Subsidy::class);
    // }

    public function subsidyStatus(){
        return $this->belongsTo(SubsidyStatus::class);
    }

}
