
<?php
include("utilitis/config.php");
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from product");
include_once( 'adminpanel.php'); 

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Smart sales is your Ultimate Tech-Gadget Supplier</title>
</head>
<body>
	<?php
    include_once('adminpanel.php');
    ?>
    
	
 <div class = "table-responsive">   
    <h2 align="center">Product List</h2>

        
    <table class = "table" border="2" align="center">

        <thead>

        <th>Product ID</th>
        <th>Category ID</th>
        <th>name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>In sale</th>
        <th>Image</th>
        <th>Discount</th>
        <th colspan="2">Action</th>
        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>
        	<td><?php
                echo stripslashes($rs_res["id"]);
                ?></td>
            <td><?php
                echo stripslashes($rs_res["category_id"]);
                ?></td>

            <td><?php echo $rs_res["name"]?></td>
            <td><?php echo $rs_res["description"]?></td>
            <td><?php echo $rs_res["price"]?></td>
            <td><?php echo $rs_res["stock"]?></td>
            <td><?php echo $rs_res["in_sale"]?></td>
            <td><?php echo $rs_res["image"]?></td>
            <td><?php echo $rs_res["discount"]?></td>
            
            <td><a href="admin_editproduct.php?id=<?php echo $rs_res["id"];?>">Edit</a></td>
            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deleteproduct.php?id=<?php echo $rs_res["id"];?>">Delete</a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
        <tr>
        	<td colspan="6" align="center">
        		<a href="product_add.php"><input type="button" name="add" value="Add Product"></a>
        	</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



