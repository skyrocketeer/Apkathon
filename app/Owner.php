<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->hasMany(Room::class);
    }
}
