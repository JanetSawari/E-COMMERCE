 <?php

  include_once ('utilitis/config.php');
  include_once("utilitis/checksession.php");
  

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
  <div class="table-responsive">
    <?php include_once( 'adminpanel.php'); ?>
    <form action = "" method = "POST" enctype="multipart/form-data">
       <table class = "table" border="2">
       <tr>
            <td>User name: </td>
            <td> <input type="text" name="username"></td>
       </tr>
        <tr>
            <td>Password</td>
            <td> <input type="text" name="password"></td>
       </tr>
        <tr>
            <td>Status</td>
            <td> <input type="text" name="status"></td>
       </tr>
       <tr>
            <td>Role</td>
            <td> <input type="text" name="role"></td>
       </tr>
       
           <td colspan="2" align="center"> <input type="submit" name="submit" value="Add Categories"></td>
       </tr>

           
       </table>
        
    </form>
</div>
</body>
</html>

<?php
 include ('utilitis/config.php'); 

  
  if(isset($_POST['submit'])){


     

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    

    
   $query ="insert into user(username,password,status,role) values('$username','$password','$status','$role')";
    

    
    echo $query;
    
  
    $result = mysqli_query($conn,$query) or die ("Error");

    if($result){
      header("Location: admin_viewuser.php");
    }
  
    
   
    // if ($res) {
        
    //     header("Location:login.php");
    // }  
   //header("Location:login.php");
    
}

 
        
   

?>
