<?php
include("includes/header.php");
 ?>


<?php
include('classes/Class_Product.php');
$x=new product();
if (isset($_POST['Add'])) {
 $post_title                      = $_POST['title'];
 $post_desc                       = $_POST['description'];
 $vendor_phone                    = $_POST['phone'];
 $images = $_FILES['images']['name'];
 $tmp_name = $_FILES['images']['tmp_name'];
 $path = 'images/';
 move_uploaded_file($tmp_name,$path.$images);
 $vendor_name                     = $_POST['name'];

  $con=mysqli_connect("localhost","root","","capstone");
   $query="insert into post(post_title,post_desc,vendor_phone,images,vendor_name)
      values('$post_title','$post_desc','$vendor_phone','$images','$vendor_name')";
       mysqli_query($con,$query);
    echo '<meta http-equiv="refresh" content="0">';

 }


 
?>



	<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
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
									<h3 class="panel-title" style="font-size:20px;">Add Post</h3>
								</div>
								<div class="panel-body">
									
									<br>
									<input class="form-control" placeholder="post Title"  type="text" name="title" >
									<br>
									<input class="form-control" placeholder="Post description" type="text" name="description">
									<br>
								   <input class="form-control" placeholder=" Vendor Phone" type="text" name="phone">
									<br>
                                    <input class="form-control" placeholder="Upload Product Image Below" type="text" disabled>
									<br>
                                     <input class="form-control" placeholder="Product image" type="file" name="images">
									<br>
                                    
                                    
								
									
                                     <input class="form-control" placeholder="Vendor name" type="text" name="name">
                                   <br>
								<input type="submit" class="btn btn-primary"  value="Add Post" name="Add">
								</div>
                                </form>
                                	
								
						
							</div></div>
                        
							<!-- END INPUT SIZING -->
						
                        </center>
                            
                    </div></div></div>



<div class="container-fluid">
					<div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-9">
                        	<div class="panel" style="background:#FFFFFF">
								<div class="panel-heading">
									<h3 class="panel-title" >Product Information</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th> Title Post</th>
												<th> Description</th>
												<th>Phone</th>
												<th>images</th>
												<th>Vendor</th>
												<th>Delete</th>
												<th>Update</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
										if($printer = $x->ReadPOST()){
                                foreach ($printer as $key => $value) {
                                  
                                    echo "<tr>";
                                    echo "<td>{$value['post_title']}</td>";
                                    echo "<td>{$value['post_desc']}</td>";
                                    echo "<td>{$value['vendor_phone']}</td>";
                                    echo "<td><img src='images/{$value['images']}' width='150' height='150'></td>";
                                    echo "<td>{$value['vendor_name']}</td>";
                                    echo "<td><a href='update_post.php ?id={$value['post_id']}' class='btn btn-primary'>Edit</a></td>";
                                   echo "<td><a href='Delete_post.php?id={$value['post_id']}'
                                   class='btn btn-danger'>Delete</a></td>"; 
                                     echo "</tr>";

                            }
                      
                        }
                           

                          ?>
										</tbody>
									</table>
								</div>
							</div>    
                            
                        </div></div></div>

</div>
			
			<!-- END MAIN CONTENT -->
		
		<!-- END MAIN -->
		<div class="clearfix"></div>
<?php
include("includes/footer.php");
 ?>