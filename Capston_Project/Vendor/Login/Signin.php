<?php 
    session_start();
    require('../classes/register_class.php');

    $x=new register();
    if(isset($_POST['register'])){
        $x->vendor_name                       =$_POST['vendor_name'];
        $x->manager_name                      =$_POST['manager_name'];
        $x->vendor_email                      =$_POST['vendor_email'];
        $x->vendor_password                   =$_POST['vendor_password'];
        $x->vendor_mobile                     =$_POST['vendor_mobile'];
        $x->image                             = $_FILES['image']['name'];
        $temp_name                            = $_FILES['image']['tmp_name'];
        $path                                 = "images/";
        move_uploaded_file($temp_name,$path.$x->image);
        $x->image2                             = $_FILES['image2']['name'];
        $temp_name                            = $_FILES['image2']['tmp_name'];
        $path                                 = "images/";
        move_uploaded_file($temp_name,$path.$x->image2);
       $ids = implode(",",$_POST["category"]);
       $x->category=$ids;
    $x->insertvendorData();

    
                                                      
    

header("location:../politics_page.php");
    }
        
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Vendor Sign in</title>
      <!-- Favicon  -->
    <link rel="icon" href="../Public/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../Public/css/core-style.css">

    <!-- Responsive CSS -->
    <link href="../assets/css/responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="./style.css">

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
  <div class="foot" style="top:1000px;">
    <div class="finger"></div>
  </div>
  <div class="foot rgt" style="top:1000px;">
    <div class="finger"></div>
  </div>
</div>
<form action="" method="post" enctype="multipart/form-data" style="height:1000px;">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Vendor Sign in</h1>
  <div class="form-group">
    <input required="required" class="form-control" name="vendor_name"/ type="text">
    <label class="form-label">Company name</label><br>
  </div>
    <div class="form-group">
    <input required="required" class="form-control" name="manager_name"/ type="text">
    <label class="form-label">Manager name</label><br>
  </div>
 <div class="form-group">
    <input required="required" class="form-control" name="vendor_email"/ type="email">
    <label class="form-label">Company Email</label><br>
  </div>
    
  <div class="form-group">
        <label class="form-label"> Company Logo</label><br><br>
    <input required="required" class="form-control" name="image"/ type="file">
  </div>  
    <div class="form-group">
        <label class="form-label"> Company Licence</label><br><br>
    <input required="required" class="form-control" name="image2"/ type="file">
  </div> 
   <div class="form-group">
        <label class="form-label"> Company Mobile</label><br>
    <input required="required" class="form-control" name="vendor_mobile"/ type="text">
  </div>  
  <div class="form-group">
          <label class="form-label">Password</label><br>

    <input id="password" type="password" required="required" class="form-control"  name="vendor_password"/><br><br>
      
      
    <p class="alert">Invalid Credentials..!!</p>
      
        
      <?php
              echo "<div class='form-group'>";

     if($data = $x->readcategory()){
        foreach ($data as $key => $value) {
              echo "<div class='container' style='float:left;margin-bottom:20px;margin-right:7px;'>";
              echo "<div class='row'>";
            echo "<div col-sm-6>";
      $i=$value['category_name'];
    echo "<input name='category[]' type='checkbox' value='$i'>";
        echo "<span>{$value['category_name']}</span>";
        echo "</div>"; 
        echo "</div>"; 
        echo "</div>"; 

        }}
      
        echo "</div>"; 
?>
    <br><br><input type="submit" class="btn" style="margin-bottom: 10px;margin-right:80px;margin-top:70px;" value="Sign In" name="register"><br>
    
  </div>
    
    

</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>