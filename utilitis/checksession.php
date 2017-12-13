<?php


if(!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"]))

{
    header("Location:login.php");
}

else if(($_SESSION["user_role"]=='user') )

{
    header("Location:index.php");
}

?>