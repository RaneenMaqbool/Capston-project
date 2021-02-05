<?php
include 'includes/connect.php';
$query="delete from post where post_id={$_GET['id']}";
mysqli_query($con,$query);
header("location:Add_post.php");
?>
