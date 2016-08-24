<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ChatModel ;
use App\MessagesModel ;
use Auth ;
use Event ;
use App\Events\msgsend ;


class MessageController extends Controller
{
   public function getmessage(Request $request){
       $channel = $request->input('channel');
       $id = $request->input('id');
       $model = ChatModel::where('id',$id)->first();
       if ($model->channel == $channel){
           $messages = MessagesModel::where('chatid',$id)->get();
           return $messages;


       }else{
           return 'an error occuerd' ;
       }



   }
   public function store(Request $request){




       $data = $request->only(['channel','chatid','body']);
      $data['senderid'] = Auth::user()->id;
      //$data['senderid'] = 1 ;

           MessagesModel::create($data);
       Event::fire(new msgsend($data['channel'],$data['body']));
       return 'done';
       }


}
