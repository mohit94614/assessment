<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name','phone_no','email','city','address','date','status'
    ];

    public function citys(){
        return $this->hasOne('App\City','id','city');
    }
}
