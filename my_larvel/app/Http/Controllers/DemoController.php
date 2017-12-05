<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Sensitive;



class DemoController extends Controller
{
  

		   public function show(){
		   	$data = DB::table('ri')->get();
		   	// print_r($data);die;
		    return view('show')->with('data',$data);
		     
		   }

		   public function jdjg_add(){
		   	$content = Input::get('content');
		   	$user = Input::get('u_name');
		   	$time = Input::get('time');

		   	 $reg = DB::table('ri')->insert(['content' => $content,'time' => $time, 'user' => $user]);
		   	 // print_r($reg);die;
		   	// $reg = DB::table('ri')->insert(['content'=>$content,'time'=>$time,'u_name'=>$u_name]);
		   	if($reg){
		   		echo 1;
		   	}else{
		   		echo 0;
		   	}
		   }


		   public function del(){
			   	$id = Input::get('id');
			   	$reg = DB::table('ri')->where(['id'=>$id])->delete();
			   	if($reg){
			   		echo 1;
			   	}else{
			   		echo 0;
			   	}
		   }


		   public function redis(){
             
// $user = Redis::set('k','sssss');  
		   }



}