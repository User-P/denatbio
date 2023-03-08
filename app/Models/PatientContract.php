<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientContract extends Model
{
    public $guarded=[];

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id','id')->withTrashed();
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class,'contract_id','id');
    }
}
