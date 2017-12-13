
<?php

include_once("utilitis/config.php");
include_once("utilitis/checksession.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
</head>
<body>


  <div class ="table-responsive">
<?php include_once( 'adminpanel.php'); ?>

    <form action = "" method = "POST" enctype="multipart/form-data">
       <table class ="table" border="2">
       <tr>
            <td>Category name: </td>
            <td> <input type="text" name="category_name"></td>
       </tr>
        <tr>
            <td>Description</td>
            <td> <input type="text" name="category_description"></td>
       </tr>
        <tr>
            <td>Image</td>
            <td> <input type="file" name="image"></td>
       </tr>
       <tr>
            <td>Page title</td>
            <td> <input type="text" name="page_title"></td>
       </tr>
       <tr>
            <td>Page keywords</td>
            <td> <input type="text" name="page_keywords"></td>
       </tr>
       <tr>
            <td>Page Description</td>
            <td> <input type="text" name="page_description"></td>
       </tr>
       <tr>
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


      $target_dir = "./images/category/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }


    $category_name = $_POST['category_name'];
    $category_description = $_POST['category_description'];
    $image = $_FILES['image']['name'];
    $page_title = $_POST['page_title'];
    $page_keywords = $_POST['page_keywords'];
    $page_description = $_POST['page_description'];


    
   $query ="insert into category(name,description,image,page_title,page_keywords,page_description) values('$category_name','$category_description','$image','$page_title','$page_keywords','$page_description')";
    

    
    echo $query;
    
  
    $result = mysqli_query($conn,$query) or die ("Error");
  
    if($result){
      header("Location:admin_viewcategory.php");
    }
   
    // if ($res) {
        
    //     header("Location:login.php");
    // }  
   //header("Location:login.php");
    
}

 
        
   

?>
