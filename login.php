<?php
include("utilitis/config.php");

if(isset($_POST['submit'])){
    
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    // Check connection
    //echo $username;
    //echo $password;

    $query = "select * from user where username = '$username' and password = '$password'";
    
    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);

    if($result1){

        
        $_SESSION["user_id"] = $result1["user_id"];
        $_SESSION["user_role"] = $result1["role"];

        // print_r($_SESSION["user_id"]);
        // print_r($_SESSION["user_role"]);
        // die;
        if($_SESSION["user_role"] == "user" ){
        	header("Location: index.php");
        }
        else{
        	header("Location:adminpanel.php");
        }


        // if($_SESSION["user_role"] == "admin" || $_SESSION["user_role"] ="superadmin"){
        // 	print_r("Inside the user and superadmin------------");
        // 	print_r($_SESSION["user_id"]);
        //     print_r($_SESSION["user_role"]);
        // die;
        // 	header("Location:adminpanel.php");
        // }
        // else if($_SESSION["user_role"] == "user" ){
        // 	header("Location: index.php");
        // }


    }
    else{

        header("Location:login.php");
        
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Your Ultimate Tech-Gadget Solution</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<a href="login.php"><img src="images/logo.png" alt=""> </a>
	</div>
	<div class="header-right">
	<div class="contact-info">
		<ul>
			<li>Contact Us</li>
			<li>+86 45678901</li>
		</ul>
	</div>
	<div class="menu">
	 	 <ul class="nav">
        <li><a href="index.html" title="">Home</a></li>
	    <li><a href="login.php">Login</a></li>
  		<div class="clear"></div>
      </ul>
	 </div>
	 </div>
	<div class="clear"></div>
</div>
<div> <h3>Welcome To Smart Sell</h3></div>
<div class="main">

		
			   <div class="col_1_of_list span_1_of_list login-left">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, Please Log In</p>
				<form action = "" method = "POST">
				  <div class="form-group">
					<span>Email Address or Username<label>*</label></span>
					<input type="text" name="username" class="form-control"> 
				  </div>
				  <div class="form-group">
					<span>Password<label>*</label></span>
					<input type="password" name ="password" class="form-control"> 
				  </div>
				  <a class="forgot" href="signup.php">Not Registered!! Signup</a>
				  <input type="submit" value="Login" name="submit">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
		
	</div>
  <div class="clear"></div>
</div>
</div>


</body>
<footer>

<div class="footer-bg">
<div class="wrap">
<div class="footer">

	<div class="footer1">
	<p>All Rights Reserved | Design by&nbsp; <a href=""> Janet Sawari</a></p>

	</div>
</div>
</div>
</div>
</footer>
</html>

