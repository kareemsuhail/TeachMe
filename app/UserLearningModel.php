<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLearningModel extends Model
{
   protected $table='userslearnigntable';
    protected $fillable = ['userid','categoryid'];
    public function CategoryName(){
        return $this->belongsTo('App\CategoriesModel');
    }
}
