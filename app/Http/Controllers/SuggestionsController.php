<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClassesModel ;
use App\CourcesModel ;
use App\UserLearningModel ;
use App\ChatUsersModel ;
use DB ;
use Auth ;


class SuggestionsController extends Controller
{

    public  $chatusers ;
    public $chats ;
    public function __construct()
    {
        if (Auth::check()) {
            $chatsids = ChatUsersModel::where('userid',Auth::user()->id)->lists('chatid');
            $chats = DB::table('chattable')->whereIn('id',  $chatsids)->get();
            $usersid = DB::table('chatuserstable')->where('userid', '!=', Auth::user()->id) ->whereIn('chatid', $chatsids)->lists('userid');
            $users = DB::table('users')->select('id','name')->whereIn('id', $usersid)->get();
            $this->chatusers = $users;
            $this->chats = $chats ;
        }
    }
    public function ShowSuggestions($name,$id){
         $usersid = UserLearningModel::where('categoryid',$id)->lists('userid');
        $users = DB::table('users')
            ->whereIn('id', $usersid)
            ->get();
        $classes = ClassesModel::where('categoryid',$id)->get();
        $cources = CourcesModel::where('categoryid',$id)->get();

        $chatusers = $this->chatusers ;
        $chats = $this->chats ;






        return view('suggestions.suggestions',compact('users','classes','cources','name','chatusers','chats'));
    }
}
