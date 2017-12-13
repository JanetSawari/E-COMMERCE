
<?php 
	
	include_once("utilitis/config.php");
	$id = $_GET["id"];

	$rs_results = mysqli_query($conn,"Select * from product where id = $id");
	$rs_fectchpro = mysqli_fetch_assoc($rs_results);
	include_once('include_user.php');
	

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Smart Sale is your Ultimate Tech-Gadget Solution</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<!--image slider-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script src="js/jquery-slider.js" type="text/javascript"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>

<div class="main">
<div class="details">
				  <div class="product-details">				
					<div class="images_3_of_2">
						<div id="container">
						   <div id="products_example">
							<div id="products">
								<div class="img-responsive">
									<a href="#" target="_blank"><img src="images/product/<?php echo $rs_fectchpro["image"];?>"> </a>
								</div>
								<!-- <ul class="pagination">
									<li><a href="#"><img src="images/thumbnailslide-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-3.jpg" alt=" " /></a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $rs_fectchpro["name"]?></h2>
					<p><?php echo $rs_fectchpro["description"]?></p>					
					<div class="price">
						<p>Price: <span><?php echo $rs_fectchpro["price"]?></span></p>
					</div>
					<div class="available">
						<p>Available Options :</p>
						Quantity:
						<form method="POST" action="sendemail.php">
							<input type="hidden" name="product_id" value= <?php echo $rs_fectchpro["id"]?> />
							<select name="quantity" class="form-control">

							 <?php
       							 for ($i = 1; $i <= $rs_fectchpro["stock"]; $i++)
       								 {
       								 	
       						  ?>
        						<option value="<?php echo $i ?>"> <?php echo $i ?></option>

        					  <?php } ?>
							
							</select>
							<br>
							 <button type="submit" class="btn-lg" >ADD TO CART</button>
						</form>
						
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="images/fb.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/twiter.png" alt=""></a></li>	
					    	<li><a href="#"><img src="images/rss.png" alt=""></a></li>					    
			    		</ul>
					</div>
										
					<div class="clear"></div>
				</div>
				 
			</div>
			<div class="clear"></div>
		  </div>
		
		 </div>
	 </div>
	    

    	</div>

        </div>

</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
	<div class="footer1">
	<p>All Rights Reserved | Design by&nbsp; <a href="#"> Janet Sawari</a></p>

</div>
</div>
</div>
</div>
</body>
</html>
