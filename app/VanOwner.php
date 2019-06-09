<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\VanOwnerResetPasswordNotification;

class VanOwner extends Authenticatable
{
    use Notifiable;

    protected $guard = 'vanOwner';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public function vanroutes()
    {
        return $this->hasMany('App\SchoolVanRoute');
    }


    public function routeSchools()
    {
        return $this->hasMany('App\RouteSchool');
    }

    public function routeCheckPoints()
    {
        return $this->hasMany('App\RouteCheckPoint');
    }

    




    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new VanOwnerResetPasswordNotification($token));
    }
}
