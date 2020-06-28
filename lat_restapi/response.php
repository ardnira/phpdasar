<?php 
	function sendResponse($resp_code,$data,$message){
		if ($resp_code==300){
		//echo json_encode(array("hasilnya  "=>$data));
			echo json_encode( $data );
		}
		else{ 
		echo json_encode(array("code"=>$resp_code,"message"=>$message,"data"=>$data));
		}
	}

 ?> 

