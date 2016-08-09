<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourcesModel extends Model
{
    protected $table = 'courcestable' ;
    protected $fillable = ['name','categoryid'];
}
