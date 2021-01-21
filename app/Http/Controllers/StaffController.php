<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\ad;

class StaffController extends Controller
{
	public $len = 9;
	
    public function index()
    {	
		Session::put('arrAngka',['A','B','C','D','E','F','G','H','I']);
	
		if(!Session::has('arr')){
			Session::put('arr',0);
			$arr = 0;
		}		
		else{
			$arr = Session::get('arr');
		}
		
		if($arr >= $this->len){
			
			$arr = 1;
			
			Session::put('arr',$arr);
		}
		else
		{
			$arr = $arr+1;
			Session::put('arr',$arr);
		}	
		//dd($arr);
		$ad = ad::selectRaw('*')->where('id',$arr)->first();
		
		$impression=0;
		$click=0;
		if($ad->impression)
			$impression = $ad->impression;
		if($ad->click)
			$click  = $ad->click ;
		$ctr = $click / ($impression+1 ?: 1); // returns 0 / 55 = 0
		$update = ad::where('id',$arr)->update(['impression'=>$impression+1,'ctr'=>$ctr]);
		
		
        return view('welcome');
    }
	
	public function click()
    {	
		$arr = Session::get('arr'); 
		
		$ad = ad::selectRaw('*')->where('id',$arr)->first();
		//dd($ad->click);
		$impression=0;
		$click=0;
		if($ad->impression)
			$impression = $ad->impression;
		if($ad->click)
			$click  = $ad->click ;
		$ctr = $click+1 / ($impression ?: 1); // returns 0 / 55 = 0
		$update = ad::where('id',$arr)->update(['click'=>$click+1,'ctr'=>$ctr]);
		return response()->json(['status'=>200,'data'=>true,'message'=>'Add Click Successfully']);
	
	}
	
	public function mo()
    {	
		$arr = Session::get('arr'); 
		
		$ad = ad::selectRaw('*')->where('id',$arr)->first();
		//dd($ad);
		//dd($ad->click);
		$mo=0;
		$click=0;
		if($ad->mo)
			$mo = $ad->mo;
		if($ad->click)
			$click  = $ad->click ;
		$cvr = $mo+1 / ($click ?: 1); // returns 0 / 55 = 0
		$update = ad::where('id',$arr)->update(['mo'=>$mo+1,'cvr'=>$cvr]);
		return response()->json(['status'=>200,'data'=>true,'message'=>'Add Mo Successfully']);
	
	}
}