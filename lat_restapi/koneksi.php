<?php 
	function getconnection() 	{
		$conn=new mysqli("localhost","root","","parkir_dbserver");
		if($conn->connect_error){
			$conn=null;
		}
		return $conn;
	}
 ?>
