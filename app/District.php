<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function wards(){
        return $this->hasMany(Ward::class);
    }
}
