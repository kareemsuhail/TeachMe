<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatUsersModel extends Model
{
   protected $table = 'chatuserstable';
    protected  $fillable =['userid','chatid'];
    public function Chat(){
        return $this->belongsTo('App\ChatModel','chatid');
    }
    public function user(){
        return $this->belongsTo('App\User','userid');
    }
}
