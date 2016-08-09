<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowersModel extends Model
{
    protected $table = 'followerstable' ;
    protected $fillable = ['followerid','followingid'];
}
