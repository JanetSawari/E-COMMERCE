<?php

	include ('utilitis/config.php'); 
	include_once("utilitis/checksession.php");
	
	$id = $_GET["user_id"];
	$query = "delete from user where user_id = $id";
	$result = mysqli_query($conn,$query);
	if($result){
		//$_SESSION["message"] = "User sucessfully deleted";
		echo "<script>alert('User Deleted Successflly')</script>";
		//header("Location:content.php");
		echo "<script>window.open('admin_viewuser.php','_self')</script>";
	}else{
		echo "<script>alert('User  is not Deleted')</script>";
		echo "<script>window.open('admin_viewuser.php','_self')</script>";
		//$_SESSION["message"] = "Cannot delete the user";
		//header("Location:content.php");
	}
	

?>