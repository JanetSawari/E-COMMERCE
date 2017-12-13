
<?php

include_once("utilitis/config.php");
// echo "<pre>";
// print_r($_SESSION);
// die;
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from cart");
include_once('adminpanel.php');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Smart Sales is your Ultimate Tech-Gadget Solution</title>
</head>
<body>
    <?php
    include_once('adminpanel.php');
    ?>
	
<div class="table-responsive">
    <h2 align="center">Cart List</h2>


    <table class = "table" border="2" align="center">
        <thead>
        
        <th>Cart ID</th>
        <th>User ID</th>
        <th>Product ID</th>
        <th>Quantity</th>
        
        <th colspan="2">Action</th>
        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>

            <td><?php echo $rs_res["id"]?></td>
            <td><?php echo $rs_res["user_id"]?></td>
            <td><?php echo $rs_res["product_id"]?></td>
            <td><?php echo $rs_res["quantity"]?></td>
            
            
            <td><a href="admin_edituser.php?user_id=<?php echo $rs_res["user_id"];?>">Edit</a></td>

            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deleteuser.php?user_id=<?php echo $rs_res["user_id"];?>">Delete</a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
      
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



