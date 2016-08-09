<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideosModel extends Model
{
    protected $table = 'videostable' ;
    protected $fillable = ['name','courceid','url'];
}
