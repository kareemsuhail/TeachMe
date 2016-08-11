<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SuggestionsController extends Controller
{
    public function ShowSuggestions(){
        return view('suggestions/suggestions');
    }
}
