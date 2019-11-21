<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function ward(){
        return $this->belongsTo(Ward::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
