<?php 
include("utilitis/config.php");
include_once("utilitis/checksession.php");
  $id = $_GET["id"];
    $selectsql =  "SELECT * FROM Category WHERE id=$id";
    $result = mysqli_query($conn,$selectsql);
    $fetched_row = mysqli_fetch_array($result);     
     include_once( 'adminpanel.php'); 

?>
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


    
   $query ="UPDATE category SET  name='$category_name', description='$category_description', image='$image', page_title='$page_title', page_keywords= '$page_keywords', page_description ='$page_description' WHERE id = $id";
    

    
    echo $query;
    
  
    $result = mysqli_query($conn,$query) or die ("Error");

    if($result){
      header("Location: admin_viewcategory.php");
    }
  
    
   
    // if ($res) {
        
    //     header("Location:login.php");
    // }  
   //header("Location:login.php");
    
}

 
        
   

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

 <div class="row">
  <div class="col-sm-4">
    <div class ="img-responsive">
     
        <a href=""><img src="images/category/<?php echo $fetched_row["image"];?>" alt=""/></a>
     
    </div>

  </div>
  <div class="col-sm-8">
    <div class="table-responsive">
  
    <form action = "" method = "POST" enctype="multipart/form-data">
       <table class = "table" border="2">
       <tr>
            <td>Category name: </td>
            <td> <input type="text" name="category_name" value="<?php echo $fetched_row['name']?>"></td>
       </tr>
        <tr>
            <td>Description</td>
            <td> <input type="text" name="category_description" value="<?php echo $fetched_row['description']?>"></td>
       </tr>
        <tr>
            <td>Image</td>
            <td> <input type="file" name="image" value="<?php echo $fetched_row['name']?>"></td>
       </tr>
       <tr>
            <td>Page title</td>
            <td> <input type="text" name="page_title" value="<?php echo $fetched_row['page_title']?>"></td>
       </tr>
       <tr>
            <td>Page keywords</td>
            <td> <input type="text" name="page_keywords" value="<?php echo $fetched_row['page_keywords']?>"></td>
       </tr>
       <tr>
            <td>Page Description</td>
            <td> <input type="text" name="page_description" value="<?php echo $fetched_row['page_description']?>"></td>
       </tr>
       <tr>
           <td colspan="2" align="center"> <input type="submit" name="submit" value="Update"></td>
       </tr>

           
       </table>
        
    </form>
</div> 

  </div>
  
</div>
</body>
</html>

