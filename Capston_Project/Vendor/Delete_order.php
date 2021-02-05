<?php

include('classes/Class_Product.php');

$x=new product();
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","capstone");
 $query="select * from orders";
 $result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 $k=$row['customer_id'];
 $l=$row['total'];
$ll=$row['vendor_id'];
}
$query="insert into lastorders(customer_id,total,vendor_id)
      values('$k','$l','$ll')";
mysqli_query($con,$query);
$x->delete_orders($id);

header("location:Orders.php");   

  
?>