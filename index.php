
<?php
include("utilitis/config.php");
			
		

		$rs_results = mysqli_query($conn,"Select id,name from category");

		$rs_resultforrandom =mysqli_query($conn,"Select * from product order by rand() limit 9") or die("Error");

		$rs_specialoffer = mysqli_query($conn,"Select * from product where in_sale=1 order by rand() limit 1 ") or die("Error");

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
		<h2>Categories</h2>
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
	
	
	<div class="clear"></div>
	
	<div class="grid">
	<div class="grid-img">
		<a href="details.php?id=<?php echo $rs_specialfetch["id"]?>"><img src="images/product/<?php echo $rs_specialfetch["image"];?>" alt=""/></a>
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
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><img src="images/product/<?php echo $rs_rand["image"];?>" alt=""/></a>
						 <a href="details.php?id=<?php echo $rs_rand["id"];?>"><h3><?php echo $rs_rand["description"];?></h3></a>
						 <div class="cart-b">
							<span class="price left"><sup>Rs <?php echo $rs_rand["price"] ?></sup><sub></sub></span>
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
	<div class="f_nav">
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Announcements</a></li>
			<li><a href="#">Security Center</a></li>
			<li><a href="#">Resolution Center</a></li>
			<li><a href="#">Buyer Tools</a></li>
			<li><a href="#">Policies</a></li>
			<li><a href="#">Stores</a></li>
			<li><a href="#">Site Map</a></li>
		</ul>
	</div>
	<div class="footer1">
		<p>All Rights Reserved | Design by&nbsp; <a href=""> Janet Sawari</a></p>		
	</div>
</div>
</body>
</html>

