<?php
include("utilitis/config.php");

if(isset($_POST['submit'])){
    
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $repassword = addslashes($_POST['repassword']);
 

    $query = "insert into user(username,password,status,role) value('$username','$password',1,'user')" ;

    $result = mysqli_query($conn,$query) or die("Error");
    $result1 = mysqli_fetch_assoc($result);

   	header("Location:login.php");


        
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Smart Sale is your ultimate Tech-gadget solution</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript">
	function validatePassword(){
		
		var emailq = document.getElementById("emailadd").value;
		var pass1 = document.getElementById("password").value;
		var pass2 = document.getElementById("repassword").value;
		if(emailq===null || emailq===""){
			alert("Email Address Can not be null");

		}
		// if(!(repassword === password)){
		// 	alert(pass1+pass2+"Password doesnot match!");
		// }


		
	
}
</script>
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
			<li>Help line</li>
			<li>+123-456-78901</li>
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
<div> <h3>Welcome to Smart Sales</h3>
</div>
<div class="main">

		
			   <div class="col_1_of_list span_1_of_list login-left">
			  	<h3>SIGN UP</h3>
			  	<div id="Errormessage"></div>
				<p>If you don't have have an account with us, please Sign Up.</p>
				<form action = "" method = "POST">
				  <div class="form-group">
					<span>Email Address<label>*</label></span>
					<input type="text" name="username" class="form-control" id="emailadd"> 
				  </div>
				  <div class="form-group">
					<span>Password<label>*</label></span>
					<input type="password" name ="password" class="form-control" id="password"> 
				  </div>
				 
				  <input type="submit" value="Sign UP" name="submit" onClick="validatePassword()" >
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

