<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatModel extends Model
{
    protected $table = 'chattable';
    protected $fillable = ['channel'];
}
