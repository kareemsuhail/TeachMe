<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatUsersModel extends Model
{
   protected $table = 'chatuserstable';
    protected  $fillable =['userid','chatid'];
}
