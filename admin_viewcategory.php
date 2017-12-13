
<?php
include("utilitis/config.php");
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from Category");

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Your Ultimate Tech-Gadget Supplier</title>

</head>
<body>
    <?php
    include_once('adminpanel.php');
    ?>
    
	<h2 align="center">Category List</h2>
<div class ="table-responsive">
        <?php include_once( 'adminpanel.php'); ?>
    <table class ="table" border="2" align="center">
        <thead>
        
        <th>Category ID</th>
        <th>name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Page Title</th>
        <th>Page Keywords</th>
        <th>Page Description</th>
        
       
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

            <td><?php echo $rs_res["name"]?></td>
            <td><?php echo $rs_res["description"]?></td>
            <td><?php echo $rs_res["image"]?></td>
            <td><?php echo $rs_res["page_title"]?></td>
            <td><?php echo $rs_res["page_keywords"]?></td>
            <td><?php echo $rs_res["page_description"]?></td>
            
            <td><a href="admin_editcategory.php?id=<?php echo $rs_res["id"];?>">Edit</a></td>
            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deletecategory.php?id=<?php echo $rs_res["id"];?>">Delete</a></td> 
            <?php } ?>              
        </tr>
        

        <?php }?>
        <tr>
        	<td colspan="6" align="center">
        		<a href="category_add.php"><input type="button" name="add" value="Add Category"></a>
        	</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>



