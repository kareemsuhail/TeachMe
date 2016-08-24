<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CourcesModel ;
use Auth ;
use App\ChatUsersModel ;
use DB ;

class CourseController extends Controller
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
            $this->chatusers = $users ;
            $this->chats = $chats ;
        }
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = CourcesModel::where('id',$id)->first();
        $videos = $course->Videos()->get();
        $chatusers = $this->chatusers ;
        $chats = $this->chats ;

        return view('course.course',compact('course','videos','chatusers','chats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
