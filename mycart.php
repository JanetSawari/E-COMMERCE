
<?php

include_once("utilitis/config.php");
// echo "<pre>";
// print_r($_SESSION);
// die;

if($_SESSION['user_role'] != 'user'){
    header("Location:login.php");
}

$user_id = $_GET['user_id'];
// echo $user_id;
// die;

$rs_product = mysqli_query($conn,"Select id,product_id,quantity from cart where user_id = $user_id") or die("Error");
$rs_quantity = mysqli_query($conn,"Select quantity from cart where user_id = $user_id") or die("Error middle");
$rs_user    = mysqli_query($conn,"Select username from user where user_id =$user_id") or die("Second Error");
include_once('include_user.php');


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Smart Sale is your Ultimate Tech-Gadget Solution </title>
</head>
<body>
    
	
<div class="table-responsive">
    <h2 align="center">My Cart</h2>


    <table class = "table" border="2" align="center">
        <thead>
        
        <th>Product Name</th>
        <th>Quantity</th>
        <th colspan="2">Action</th>

        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_product))
           

            // $rs_productname = mysqli_query($conn,"Select name from product where id = {$rs_res['product_id']}") or die("Error3");
            // $ls_productname = mysqli_fetch_assoc($rs_productname);
            
           
        {
        ?>
        <tr>
            <?php  
                $rs_productname = mysqli_query($conn,"Select name from product where id = {$rs_res['product_id']}") or die("Error3");
                 $ls_productname = mysqli_fetch_assoc($rs_productname);
            ?>
            <td><?php echo $ls_productname["name"]?></td>
            <td><?php echo $rs_res["quantity"]?></td>
            <!-- <td><?php echo $rs_res["id"];?></td> -->
            
            
            <td><a href="deletecart.php?cart_id=<?php echo $rs_res["id"];?>">DELETE</a></td>
          
        </tr>
        
        

        <?php }?>
        <tr>
            <form action="checkout.php" method="POST">
                <td colspan=2>  <input type="submit" value="Check Out" name="checkout"></input> </td>
                <td></td>
                <td></td>
            </form>
          
        </tr>
      
        </tbody>
    </table>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 



?>


