<?php 

		include_once("utilitis/config.php");
		if($_SESSION['role'] != 'user'){
				header("Location: login.php");
		}
		$id_product= $_POST["product_id"];
		$quantity =$_POST["quantity"];
		$id_user = $_SESSION["user_id"];



		$query ="insert into cart(user_id,product_id,quantity) values('$id_user','$id_product','$quantity')";
		echo $query;
		$result= mysqli_query($conn,$query) or die("------ERROR-------");

		//update quantity of product in the table
		$query ="select stock from product where id=$id_product";

		$result = mysqli_query($conn,$query) or die("---------Error2-----");
		$initial_count = mysqli_fetch_assoc($result);

		$update_stock = $initial_count["stock"] - $quantity;

		$query ="update product set stock=$update_stock where id=$id_product";

		$result = mysqli_query($conn,$query) or die("----_ERROR3-----");

		header("Location: index.php");




		$to ="janetsawari@gmail.com";
		$subject = "HI ! This one is for tests";
		$txt = "Hello world!";
		$headers ="From:spectrumcareers@yahoo.com" ;
		mail($to,$subject,$txt,$headers) or die("----Error!----");

	
 ?>