<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassesModel extends Model
{
    protected $table = 'classestable' ;
    protected $fillable = ['name','teacherid','categoryid','description'];
    public function members(){
        return $this->hasMany('App\ClassMembersModel','userid');
    }
    public function lectures(){
        return $this->hasMany('App\ClassLecturesModel','classid');
    } public function discussions(){
    return $this->hasMany('App\ClassDiscussionModel','classid');
}
      public function Teacher(){
          return $this->belongsTo('App\User', 'id');
      }
}
