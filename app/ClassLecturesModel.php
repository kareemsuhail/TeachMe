<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassLecturesModel extends Model
{
    protected $table = 'classlecturestable' ;
    protected $fillable = ['classid','url','type'];
}
