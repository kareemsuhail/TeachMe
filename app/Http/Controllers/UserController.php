<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User ;
use App\UserLearningModel ;
use App\CategoriesModel ;

class UserController extends Controller
{
  public function ShowProfile($id){
      $UserData = User::where('id',$id)->first();
      $learning = UserLearningModel::where('userid',$UserData['id'])->lists('categoryid');
       $category = CategoriesModel::where('id',$learning)->get();




      return view('profile.profile',compact('UserData','category'));

  }
}
