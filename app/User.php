<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
       return $this->belongsTo('App\Role');
    }

    public function isAdmin()
    {
      if($this->role->name =="Admin"){
         return true;
      }
      return false;
    }

    public function isSuperAdmin()
    {
      if($this->role->name=="SuperAdmin"){
         return true;
      }
      return false;
    }


    public function projects()
    {
      return $this->hasMany('App\Project');
    }
}
