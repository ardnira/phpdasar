<?php 
include_once('include.php');
$conn=getconnection();
if ($conn==null){
	sendResponse(404,$conn,'server sdh move on');
}
else{
	$sql="select * from pengguna";
	$result=$conn->query($sql);
    if ($result->num_rows > 0){
    	$users=array();
    	while($row=$result->fetch_assoc()){
    		$user=array(
    			"username"=>$row["username"],
    			"pass"=>$row["pass"],
    			"nama"=>$row["nama"],
    		);
    		array_push($users, $user);
    	}
    	  sendResponse(300,$users,'data pengguna');
    	 //echo json_encode($users);  //---> dari deni bisa langsung
    }
    else{
       sendResponse(500,[],'belm ada data');	
    }
    $conn->close();
}

 ?>
 
<!-- 
asdfas
<dfn>asdfas
</dfn> -->