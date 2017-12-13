
<?php

include_once("utilitis/config.php");
// echo "<pre>";
// print_r($_SESSION);
// die;
include_once("utilitis/checksession.php");

$rs_results = mysqli_query($conn,"Select * from user");
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
    <h2 align="center">User List</h2>


    <table class = "table" border="2" align="center">
        <thead>
        <th>UserID </th>
        <th>Username</th>
        <th>Password</th>
        <th>Status</th>
        <th>Role</th>
        
        <th colspan="2">Action</th>
        </thead>

        <tbody>
        <?php
        while ($rs_res = mysqli_fetch_assoc($rs_results))
        {
        ?>
        <tr>

            <td><?php echo $rs_res["user_id"]?></td>
            <td><?php echo $rs_res["username"]?></td>
            <td><?php echo $rs_res["password"]?></td>
            <td><?php echo $rs_res["status"]?></td>
            <td><?php echo $rs_res["role"]?></td>
            
            
            <td><a href="admin_edituser.php?user_id=<?php echo $rs_res["user_id"];?>">Edit</a></td>

            <?php if($_SESSION['user_role']=='superadmin') { ?>
            <td><a href="admin_deleteuser.php?user_id=<?php echo $rs_res["user_id"];?>">Delete</a></td> 
            <?php } ?>           
        </tr>
        

        <?php }?>
        <tr>
        	<td colspan="6" align="center">
        		<a href="admin_adduser.php"><input type="button" name="add" value="Add User"></a>
        	</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



