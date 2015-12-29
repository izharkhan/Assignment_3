<?php

namespace App\Http\Controllers;
use DB;
use Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class ViewCodeController extends Controller
{
    public function main()
    {
        
    }
    public function getCode()
    {
       
			$id=Auth::user()->id;
			if($id==1){
				$codes = DB::table('codes')->get();
			}
			else{
				$codes = DB::table('codes')->where('user_id', $id)->get();
			}
			return View::make('ViewCode')->with('codes', $codes);
		 

    }
	
}