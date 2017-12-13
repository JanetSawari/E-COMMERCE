<?php

	include ('utilitis/config.php'); 
	include_once("utilitis/checksession.php");

	//check Chession for superadmin If not the superadmin return to admin panle
	// print_r($_SESSION);
	// die;

	if($_SESSION['user_role'] =='admin'){
		header("Location: adminpanel.php");
	}

	
	$id = $_GET["id"];
	$query = "delete from category where id = $id";
	$result = mysqli_query($conn,$query);
	if($result){
		//$_SESSION["message"] = "User sucessfully deleted";
		echo "<script>alert('product Deleted Successflly')</script>";
		//header("Location:content.php");
		echo "<script>window.open('admin_viewcategory.php','_self')</script>";
	}else{
		echo "<script>alert('Product  is not Deleted')</script>";
		echo "<script>window.open('admin_viewcategory.php','_self')</script>";
		//$_SESSION["message"] = "Cannot delete the user";
		//header("Location:content.php");
	}
	

?>