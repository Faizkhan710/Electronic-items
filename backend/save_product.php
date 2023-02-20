<?php
include("config.php");




 if(isset($_FILES["fileToUpload"])){

  $error = array();
   $filename = $_FILES['fileToUpload']["name"];
 
   $filesize = $_FILES['fileToUpload']["size"];
  $file_temp = $_FILES['fileToUpload']["tmp_name"];
  $file_type = $_FILES['fileToUpload']["type"];
  $file_ext = explode('.',"$filename");
  $file_ext = end($file_ext);
  $file_ext = strtolower($file_ext);
  $extension = array("jpg","jpeg","png");

 

  if(in_array($file_ext,$extension) === false)
  {
      $error[] = "File extension must be jpeg ,jpg ,png";
  }
  if($filesize > 2097152)
  {
      $error[] =  "file is must be less than 2 mb";
  }
  if(empty($error)==true)
  {
      move_uploaded_file($file_temp,"upload/".$filename);
  }
 }
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $maker = $_POST['maker'];
  $depart = $_POST['department'];
  $code = $_POST['code'];
 $query="INSERT INTO `products`(`title`, `description`, `maker`, `department`, `p_code`,`img`) VALUES ('{$title}','{$desc}','{$maker}','{$depart}','{$code}','{$filename}')";


  $result=mysqli_query($conn,$query);
    //  header("location:http://localhost/eprojects1/backend/products.php");
    echo '<script>alert("Product Added..!")</script>';
error_reporting(0);
?>
