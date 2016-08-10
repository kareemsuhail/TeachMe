<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    public function classee()
    {
        return $this->hasMany('App\ClassesModel','userid');
    }
    public function dicussions(){
        return $this->hasMany('App\ClassDiscussion','userid');
    }
    public function requests(){
        return $this->hasMany('App\RequestsModel','receiverid');
    }
    public function Teaching(){
        return $this->hasMany('App\ClassesModel','teacherid');
    }
    public function Learnign(){
        return $this->hasMany('App\UserLearningModel','userid','id');
    }
}
