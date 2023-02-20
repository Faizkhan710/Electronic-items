<?php


include('config.php');



$id = $_GET['id'];

$query = "DELETE FROM `users` where `u_id` = $id";

$result=mysqli_query($conn,$query);

if($result)
{
    
    header("location:index.php");
}









?>