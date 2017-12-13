<!DOCTYPE HTML>
<?php 
	@session_start();

	// echo "<pre>";
	// print_r($_SESSION);
	// die;
?>
<html>
<head>
<title>Smart Sale is your Ultimate Tech-Gadget Solution</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>


</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<a href="index.php"><img src="images/logo.png" alt=""> </a>
	</div>
	<div class="header-right">
		<div class="contact-info">
			<ul>
				<li>Contact Us </li>
				<li>+86 9840012635</li>
			</ul>
		</div>
		<div class="menu">
		 	 <ul class="nav">
						<li><a href="index.html" title="Home">Home</a></li>
						<li><a href="index.php.html" title="Home">Shop</a></li>

	       		 	<?php
			  			if( isset($_SESSION['user_role'])=='user') { ?>
			  				<li><a href="mycart.php?user_id=<?php echo $_SESSION['user_id'] ?>">MyCart</a></li>
			  		<?php }
			  		 ?>
                        <li><a href="contact.html" title="Con">Contact Us</a></li>
			  		<?php
			  			if( $_SESSION != null) { ?>
			  				<li><a href="logout.php">LogOut</a></li>
			  		<?php }
			  		 ?>
			  		<?php
			  			if( $_SESSION == null) { ?>
			  				<li><a href="login.php">LogIn</a></li>
			  		<?php } ?>
		  			<div class="clear"></div>
	      		</ul>
	    </div>
	</div>
	<div class="clear"></div>
</div>



<!-- 		
	<form  class ="form-inline" action="user_searchitems.php" method="GET">
		 <div class="form-responsive">
				<input type="text" value="keyword here" name ="search_strings">
				<input type="submit" value="Search" name="search" class="btn btn-default">
		</div>
	</form> -->
		
		<div class="clear"></div>
	

	

