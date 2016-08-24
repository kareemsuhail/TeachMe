<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClassesModel ;
use Auth ;
use App\ChatUsersModel ;
use App\MessagesModel ;


use DB ;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public  $chatusers ;
    public $chats ;
    public function __construct()
    {
        if (Auth::check()) {
            $chatsids = ChatUsersModel::where('userid',Auth::user()->id)->lists('chatid');
            $chats = DB::table('chattable')->select('channel')->whereIn('id',  $chatsids)->get();
            $usersid = DB::table('chatuserstable')->where('userid', '!=', Auth::user()->id) ->whereIn('chatid', $chatsids)->lists('userid');
            $users = DB::table('users')->select('id','name')->whereIn('id', $usersid)->get();
            $this->chatusers = $users ;
            $this->chats = $chats ;
        }




    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = $request->only(['name','categoryid']);
        $class['teacherid'] = Auth::user()->id ;
        ClassesModel::create($class);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $chats = $this->chats ;
        $chatusers = $this->chatusers;

        $class = ClassesModel::where('id',$id)->first();

        return view('class.class',compact('class','chats','chatusers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return $this->users ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
