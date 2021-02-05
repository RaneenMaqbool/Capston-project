<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

   
 <?php
    include 'includes/connect.php';
    $id=$_GET['id'];
    $query="select * from post where post_id=$id";
    $result=mysqli_query($con,$query);
    $Postset=mysqli_fetch_assoc($result);
    if(isset($_POST['Update'])){
     $post_title                  = $_POST['title'];
 $post_desc                       = $_POST['description'];
 $vendor_phone                    = $_POST['phone'];
 if ($_FILES['images']['name'] != ""){
        $images              = $_FILES['images']['name'];
        $temp_name              = $_FILES['images']['tmp_name'];
        $path                   = "images/";
        move_uploaded_file($temp_name,$path.$images);      
    }else{
                $images = $Postset['images'];
            }
    
 $vendor_name = $_POST['name'];   

     //open connection
        if(!$con){
            die("cant connect");
        }
        $query="update post set post_title='$post_title',post_desc='$post_desc',vendor_phone='$vendor_phone',
        images='$images',vendor_name='$vendor_name' where post_id ='$id'";
        mysqli_query($con,$query);
        if($query){
        header("location:Add_post.php");
        exit;
    }}
    include 'includes/header.php';

  ?>
      


<div class="main" style="background:#EDF4F8">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
                        <div class="col-md-2"></div>

						<center><div class="col-md-9">
							<br><br><div class="panel" style="background:#FFFFFF">
                                <form action="" method="post" enctype="multipart/form-data">
								<div class="panel-heading">
									<h3 class="panel-title" style="font-size:20px;">Update Post</h3>
								</div>
								<div class="panel-body">
									
									<br>
									<input class="form-control" placeholder="post Title"  type="text" name="title" value="<?php echo $Postset['post_title']?>">
									<br>
									<input class="form-control" placeholder="Post description" type="text" name="description" value="<?php echo $Postset['post_desc']?>">
									<br>
								   <input class="form-control" placeholder=" Vendor Phone" type="text" name="phone"  value="<?php echo $Postset['vendor_phone']?>">
									<br>
                                    <input class="form-control" placeholder="Upload Product Image Below" type="text" disabled>
									<br>
                                    <?php echo "<img name='images' src='images/{$Postset['images']}' width='90px' style='float:left'>" ?>
                                     <input class="form-control" placeholder="Product image" type="file" name="images">
									<br>
                                    
                                    
								
									
                                     <input class="form-control" placeholder="Vendor name" type="text" name="name" value="<?php echo $Postset['vendor_name']?>">
                                   <br>
								<input type="submit" class="btn btn-primary"  value="Update Post" name="Update">
								</div>
                                </form>
                                	
								
						
							</div></div>
                        
							<!-- END INPUT SIZING -->
						
                        </center>
                            
                    </div></div></div>





</div>
			


