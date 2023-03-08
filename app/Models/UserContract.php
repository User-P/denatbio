<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserContract extends Model
{
    public $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id')->withTrashed();
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class,'contract_id','id');
    }
}
