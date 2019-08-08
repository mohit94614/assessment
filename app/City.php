<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function leads()
    {
        return $this->hasMany('App\Lead');
    }
}
