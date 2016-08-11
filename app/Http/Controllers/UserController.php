<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User ;
use App\UserLearningModel ;
use App\CategoriesModel ;
use DB ;

class UserController extends Controller
{
  public function ShowProfile($id){
      $UserData = User::where('id',$id)->first();
       $learning   = $UserData->Learnign->lists('categoryid') ;
        $AllCategories = CategoriesModel::all();
      $categories = DB::table('categoriestable')
          ->whereIn('id', $learning)
          ->get();
      $classesid = $UserData->JoinedClasses->lists('classid');
      $classes = DB::table('classestable')
          ->whereIn('id', $classesid)
          ->get();

      return view('profile.profile',compact('UserData','categories','AllCategories','classes'));

  }
  public function AccountInfo($id){
      $UserData = User::where('id',$id)->first();
      return view('profile.AccountInfo',compact('UserData'));

  }
}
