<?php

	include ('utilitis/config.php'); 
	include_once("utilitis/checksession.php");
	
	$id = $_GET["id"];
	$query = "delete from product where id = $id";
	$result = mysqli_query($conn,$query);
	if($result){
		//$_SESSION["message"] = "User sucessfully deleted";
		echo "<script>alert('product Deleted Successflly')</script>";
		//header("Location:content.php");
		echo "<script>window.open('admin_viewproduct.php','_self')</script>";
	}else{
		echo "<script>alert('Product  is not Deleted')</script>";
		echo "<script>window.open('admin_viewproduct.php','_self')</script>";
		//$_SESSION["message"] = "Cannot delete the user";
		//header("Location:content.php");
	}
	

?>