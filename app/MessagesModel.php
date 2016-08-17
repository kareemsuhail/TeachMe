<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    protected $table = 'messagestable';

    protected $fillable =['senderid','body','chatid'];
}
