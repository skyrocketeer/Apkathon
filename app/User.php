<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * event fires after creating a new user
     * this will create a corresponding owner
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($user){
    //         $user->owner()->create([
    //             'name' => $user->name
    //         ]);
    //     });
    // }

    public function owner(){
        return $this->hasOne(Owner::class);
    }

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function guest(){
        return $this->hasOne(Guest::class);
    }
}
