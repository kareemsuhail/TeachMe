<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassDiscussionModel extends Model
{
    protected $table = 'classdiscussiontable' ;
    protected $fillable = ['classid','userid','body'];
}
