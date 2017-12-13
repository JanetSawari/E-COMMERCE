<?php
	ob_start();
	include ('utilitis/config.php'); 
	if($_SESSION['user_role'] != 'user'){
		header("Location:login.php");
	}

	//check Chession for superadmin If not the superadmin return to admin panle
	// print_r($_SESSION);
	// die;

	

	
	$id = $_GET["cart_id"];
	$user_id = $_SESSION["user_id"];
	$query = "delete from cart  where id = $id";

	$qincrease = "Select  * from cart where id=$id";
	$qresult = mysqli_query($conn,$qincrease);
	$qresultlist = mysqli_fetch_assoc($qresult);
	
	

	$qinitial ="Select * from product where id={$qresultlist["product_id"]}";
	$initial = mysqli_query($conn,$qinitial);
	$initialList = mysqli_fetch_assoc($initial);


	$sum = $qresultlist['quantity'] + $initialList['stock'];
	echo $sum;
	
	$increase_query = " update product set stock=$sum where id={$qresultlist["product_id"]}";
	$increase =mysqli_query($conn,$increase_query);


    $query = "delete from cart  where id = $id";
	$result = mysqli_query($conn,$query) or die("Error");
	if($result){
		//$_SESSION["message"] = "User sucessfully deleted";

		echo "<script>alert('Cart Deleted Successflly')</script>";
		//header("Location:content.php");
		echo "<script>window.open('admin_viewcategory.php','_self')</script>";
		header("Location:mycart.php?user_id=$user_id");

	}else{
		echo "<script>alert('Cart  is not Deleted')</script>";
		echo "<script>window.open('admin_viewcategory.php','_self')</script>";
		//$_SESSION["message"] = "Cannot delete the user";
		//header("Location:content.php");
	}
	

?>