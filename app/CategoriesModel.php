<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'categoriestable' ;
    protected $fillable = ['name'];

}

