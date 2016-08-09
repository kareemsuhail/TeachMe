<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassMembersModel extends Model
{
    protected $table = 'classmemberstable' ;
    protected $fillable = ['userid','classid'];

}
