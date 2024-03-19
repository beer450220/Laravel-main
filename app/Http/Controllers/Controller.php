<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   
    // 'NnBcVp0RwWJZsbE7GTdjE96g3F68wxz1KANBrOSTf80'
    public function putMessageLine(Request $request){
        // $ch =curl_init("https://notify-api.line.me/api/notify")
        // $authorization ="Authorization: Bearer"('line_token');
        // $payload = json_encode($line_mge);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);

        // curl_setopt($ch, CURLOPT_HTTPHEADER,$array('Content-Type:application/json',$authorization));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        // $result=curl_exec($ch);
        // curl_exec($ch); 
        // $line_token = "NnBcVp0RwWJZsbE7GTdjE96g3F68wxz1KANBrOSTf80";
   
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'username' => 'required',
			'password' => 'required'
		 
			//'password' => Hash::make($request->password),
		]);

    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "NnBcVp0RwWJZsbE7GTdjE96g3F68wxz1KANBrOSTf80";
	$sMessage = "มีรายการสั่งซื้อเข้าจ้า....";

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	} 
	curl_close( $chOne ); 
   }
}
