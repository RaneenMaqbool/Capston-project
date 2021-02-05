<?php

include('classes/Class_Product.php');

$x=new product();
$id=$_GET['id'];

$x->delete_product($id);


header("location:Add_Product.php");   

  
?>