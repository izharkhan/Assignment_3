<?php

namespace App\Http\Controllers;
use DB;
use Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CodeController extends Controller
{
    public function main()
    {
        return view('interpreter');
    }
    public function formdata()
    {
       
            $data = Request::get('usercode');
            $myfile = fopen("code.php", "w+") or die("Unable to open file!");
         
            fwrite($myfile, "<?php ".$data." ?>");
            fclose($myfile); 
			$id=Auth::user()->id;
			DB::table('codes')->insert([
    ['user_id' => $id, 'code' => $data]
      
]);
			
            
         

	  //return view('interpreter_gui');
	   return redirect('/')->withInput();
    }
	
}