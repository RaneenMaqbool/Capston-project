<?php 
    session_start();
    require('../classes/register_class.php');

    $x=new register();
    if(isset($_POST['register'])){
        $x->customer_name                       =$_POST['name'];
        $x->customer_email                      =$_POST['email'];
        $x->customer_password                   =$_POST['password'];
        $x->customer_mobile                     =$_POST['mobile'];
        $x->image                               = $_FILES['image']['name'];
        $temp_name                              = $_FILES['image']['tmp_name'];
        $path                                   = "images/";
        move_uploaded_file($temp_name,$path.$x->image);
       $x->insertvendorData();

    
                                                      
    

header("location:politics_page.php");
    }
        
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Customer Sign in</title>
      <!-- Favicon  -->
    <link rel="icon" href="../Public/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../Public/css/core-style.css">

    <!-- Responsive CSS -->
    <link href="../assets/css/responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="./style.css">
<style>
    #btn{
        background:black;
    }
    btn {
    background: #fff;
    padding: 5px;
    width: 150px;
    height: 35px;
    border: 1px solid #000;
    margin-top: 25px;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 50px #000 inset;
    color: #000;
}
</style>
</head>
<body style="background: #fff">
<!-- partial:index.partial.html -->
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot" style="top:600px;">
    <div class="finger"></div>
  </div>
  <div class="foot rgt" style="top:600px;">
    <div class="finger"></div>
  </div>
</div>
<form action="" method="post" enctype="multipart/form-data" style="height:600px;">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1 style="color:#000">Customer Sign in</h1>
  <div class="form-group">
    <input required="required" class="form-control" name="name"/ type="text">
    <label class="form-label">Customer name</label><br>
  </div>
 
 <div class="form-group">
    <input required="required" class="form-control" name="email"/ type="email">
    <label class="form-label">Customer Email</label><br>
  </div>
    
    <div class="form-group">
    <input required="required" class="form-control" name="password"/ type="password">
    <label class="form-label">Customer Passowrd</label><br>
  </div>
    
     <div class="form-group">
    <input required="required" class="form-control" name="mobile"/ type="text">
    <label class="form-label">Customer mobile</label><br>
  </div>
    
  <div class="form-group">
        <label class="form-label"> Customer image</label><br><br>
    <input required="required" class="form-control" name="image"/ type="file">
  </div>  
    
    <input type="submit" class="btn" style="margin-bottom: 10px;background:#000" value="Sign In" name="register" id="btn"><br>
    
  
    
    

</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>