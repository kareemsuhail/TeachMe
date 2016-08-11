<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClassesModel ;
use App\CourcesModel ;
use App\UserLearningModel ;
use DB ;


class SuggestionsController extends Controller
{
    public function ShowSuggestions($name,$id){
         $usersid = UserLearningModel::where('categoryid',$id)->lists('userid');
        $users = DB::table('users')
            ->whereIn('id', $usersid)
            ->get();
        $classes = ClassesModel::where('categoryid',$id)->get();
        $cources = CourcesModel::where('categoryid',$id)->get();
        return view('suggestions.suggestions',compact('users','classes','cources','name'));
    }
}
