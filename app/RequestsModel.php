<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestsModel extends Model
{
    protected $table = 'requeststable' ;
    protected $fillable = ['senderid','receiverid','body'];
}
