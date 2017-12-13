<?php 

		include_once("utilitis/config.php");

		if($_SESSION['user_role'] != 'user'){
				header("Location: login.php");
		}

		$id_user = $_SESSION["user_id"];

		$query = "Select * from cart where user_id=$id_user";
		$result = mysqli_query($conn,$query);
		// $cart_info = mysqli_fetch_assoc($result); 
		// print_r($cart_info);
		// die;

		while($rs_result = mysqli_fetch_assoc($result) ){
			$query ="insert into checkout(user_id,product_id,quantity) values('{$rs_result['user_id']}','{$rs_result['product_id']}','{$rs_result['quantity']}')";
			$upcheckout = mysqli_query($conn,$query) or die("Error --->1");
			$emptyquery = "delete from cart where user_id = $id_user";
			$emptyreslt =mysqli_query($conn,$emptyquery);
		}


		
		$to ="janetsawari@gmail.com";
		$subject = "HI ! This one is for tests";
		$txt = "Hello world!";
		$headers ="From:spectrumcareers@yahoo.com" ;
		mail($to,$subject,$txt,$headers) or die("----Error!----");
		

		header("Location:index.php");




		// $query ="insert into checkout(user_id,product_id,quantity) values('$id_user','$id_product','$quantity')";
		// echo $query;
		// $result= mysqli_query($conn,$query) or die("------ERROR-------");

		// //update quantity of product in the table
		// $query ="select stock from product where id=$id_product";

		// $result = mysqli_query($conn,$query) or die("---------Error2-----");
		// $initial_count = mysqli_fetch_assoc($result);

		// $update_stock = $initial_count["stock"] - $quantity;

		// $query ="update product set stock=$update_stock where id=$id_product";

		// $result = mysqli_query($conn,$query) or die("----_ERROR3-----");

		// header("Location: index.php");





	
 ?>