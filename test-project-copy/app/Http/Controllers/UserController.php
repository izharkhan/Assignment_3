<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{


	public function routeIt() 
	{
	/*
		if ( !Auth::user() ) {
//			return 'not logged in';
			return Redirect::to('/auth/login');
		}
		else {
	//		return 'loggedin';
		
			return view('interpreter_gui');
		}
		*/
	}
}
