
<?php
include("utilitis/config.php");
			
		$search_strings = $_GET["search_strings"];
		
		

		$rs_results = mysqli_query($conn,"Select id,name from category");

		$query = "Select * from product where name like '%{$search_strings}%' order by rand() limit 9";
		
		$rs_resultforrandom =mysqli_query($conn,$query) or die("Error");


		$rs_specialoffer = mysqli_query($conn,"Select * from product where in_sale=1 and name like '%{$search_strings}%' order by rand() limit 1 ") or die("Error");

		$rs_specialfetch = mysqli_fetch_assoc($rs_specialoffer);

		






      // echo "<pre>";
      // print_r($rs_specialfetch);
      // die;
		// while ($rs_rand = mysqli_fetch_assoc($rs_resultforrandom)) {
		// 	echo "<pre>" ;
		// 	print_r($rs_rand);
		// }
		// die;


?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include_once("include_user.php");?>

</head>

<body>



<!--Dynamically show the category item in this -->
<div class="main">
<div class="sidebar">
<div class="s-main">
	<div class="s_hdr">
		<h2>Catogories</h2>
	</div>
	<div class="text1-nav">
		<ul>
		 <?php
        while ($rs_res= mysqli_fetch_assoc($rs_results))
        {
        ?>
        <li><a href="user_categoryselect.php?id=<?php echo $rs_res["id"]?>"><?php echo $rs_res["name"] ?></a></li>
        
        

        <?php }?>
        <ul>
	</div>
</div>
</div>
<div class="content">
	<div class="cnt-btn">
		<a href="">On-sale</a>
	</div>
	<div class="cnt-btn">
		<a href="">Discount</a>
	</div>
	<div class="cnt-btn">
		<a href="">Ending Soon</a>
	</div>
	
	<div class="clear"></div>
	
	<div class="grid">
	<div class="grid-img">
		<a href=""><img src="images/product/<?php echo $rs_specialfetch["image"];?>" alt=""/></a>
	</div>
	<div class="grid-para">
		<h2>Special Offer</h2>
		<h3>You may Buy</h3>
		<p><?php echo $rs_specialfetch["description"]; ?></p>
		<div class="btn top">
		<a href="details.php?id=<?php echo $rs_specialfetch["id"]?>">Details&nbsp;<img src="images/marker2.png"></a>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="cnt-main btm">
	<div class="section group">
		<?php 

				while ($rs_rand = mysqli_fetch_assoc($rs_resultforrandom)) { ?>

					<?php //  print_r("images/product/". $rs_rand["image"] );?>
					 <?php //  print_r($rs_rand["id"] );
					// 		die;

					?>

					<div class="grid_1_of_3 images_1_of_3">
						 <a href="details.html"><img src="images/product/<?php echo $rs_rand["image"];?>" alt=""/></a>
						 <a href="details.html"><h3><?php echo $rs_rand["description"];?></h3></a>
						 <div class="cart-b">
							<span class="price left"><sup><?php echo $rs_rand["price"] ?></sup><sub></sub></span>
						    <div class="btn top-right right"><a href="details.php?id=<?php echo $rs_rand["id"];?>">Add to Cart</a></div>
					    <div class="clear"></div>
					 </div>
				</div>

		
		<?php }?>


		
	
		

		
			
	</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
	
	<div class="footer1">
	<p>All Rights Reserved | Design by&nbsp; <a href=""> Janet Sawari</a></p>		

</div>
</div>
</div>
</div>
</body>
</html>

