<?php

$con=mysqli_connect("localhost","root","","capstone");
$id=$_GET['id'];
$query = "DELETE FROM cart where cart_id=$id";
$result=mysqli_query($con,$query);
$query = "DELETE FROM carts where cart_id=$id";
$result=mysqli_query($con,$query);

header("location:cart.php");   

  
?>