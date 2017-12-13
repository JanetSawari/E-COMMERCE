<?php
    include ('utilitis/config.php'); 
    include_once("utilitis/checksession.php");

    // echo "<pre>";
    //   print_r($_GET);
    //   die;


    $id = $_GET["user_id"];
    $selectsql =  "SELECT * FROM user WHERE user_id=$id";
    $result = mysqli_query($conn,$selectsql);
    $fetched_row = mysqli_fetch_array($result);     
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
     <table  class ="table" border="2">
     <tr>
          <td>User name: </td>
          <td> <input type="text" name="username" value="<?php echo $fetched_row['username']?>"></td>
     </tr>
      <tr>
          <td>Password</td>
          <td> <input type="text" name="password" value="<?php echo $fetched_row['password']?>"></td>
     </tr>
      <tr>
          <td>Status</td>
          <td> <input type="text" name="status" value="<?php echo $fetched_row['status']?>"></td>
     </tr>
     <tr>
          <td>Role</td>
          <td> <input type="text" name="role" value="<?php echo $fetched_row['role']?>"></td>
     </tr>
     
         <td colspan="2" align="center"> <input type="submit" name="submit" value="Update"></td>
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
    

    
   $query ="UPDATE user SET username='$username', password='$password', status='$status', role ='$role' WHERE user_id = $id";
    

    
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
