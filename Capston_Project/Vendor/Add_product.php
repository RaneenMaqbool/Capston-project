<?php
include("includes/header.php");
 ?>


<?php
include('classes/Class_Product.php');
$x=new product();
if (isset($_POST['Add'])) {
 $product_name                   = $_POST['name'];
 $product_price                  = $_POST['price'];
 $product_desc                   = $_POST['desc'];
 $category_id                    = $_POST['category'];
 $qty                            = $_POST['Quantity'];
 $vendor_id                      = $_SESSION['vendor_id'];

 $countfiles = count($_FILES['images']['name']);
 for($i=0;$i<$countfiles;$i++){
 $filename = $_FILES['images']['name'][$i];
  move_uploaded_file($_FILES['images']['tmp_name'][$i],'images/'.$filename);
  $con=mysqli_connect("localhost","root","","capstone");
   $query="insert into product(product_name,product_price,product_des,images,category_id,qty,vendor_id)
      values('$product_name','$product_price','$product_desc','$filename','$category_id','$qty','$vendor_id')";
       mysqli_query($con,$query);
    echo '<meta http-equiv="refresh" content="0">';

 }

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
									<h3 class="panel-title" style="font-size:20px;">Add Product</h3>
								</div>
								<div class="panel-body">
									
									<br>
									<input class="form-control" placeholder="Product name" type="text" name="name" >
									<br>
									<input class="form-control" placeholder="Product price" type="text" name="price">
									<br>
								   <input class="form-control" placeholder="Product Description" type="text" name="desc">
									<br>
                                    <input class="form-control" placeholder="Upload Product Image Below" type="text" disabled>
									<br>
                                     <input class="form-control" placeholder="Product image" type="file" name="images[]" multiple>
									<br>
                                    
                                    
									<select class="form-control" name="category">
										<option value="cheese">Choose Category</option>
                                        <?php  
                                               if($data = $x->readcategory()){
                                               foreach ($data as $key => $value) {
                                                   $i=$value['category_id'];
                                              echo "<option value='$i'>{$value['category_name']}</option>" ;}}
                                                   
                                           
                                                ?>      
									</select>
									<br>
                                     <input class="form-control" placeholder="Product Quanitiy" type="text" name="Quantity">
                                   <br>
								<input type="submit" class="btn btn-primary"  value="Add Product" name="Add">
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
												<th> Name</th>
												<th> Price</th>
												<th>Description</th>
												<th>image</th>
												<th>Quantity</th>
												<th>Category</th>
												<th>Delete</th>
												<th>Update</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
										if($printer = $x->ReadAll()){
                                foreach ($printer as $key => $value) {
                                  
                                    echo "<tr>";
                                    echo "<td>{$value['product_name']}</td>";
                                    echo "<td>{$value['product_price']}</td>";
                                    echo "<td>{$value['product_des']}</td>";
                                    echo "<td><img src='images/{$value['images']}' width='150' height='150'></td>";
                                    echo "<td>{$value['qty']}</td>";
                                    echo "<td>{$value['category_name']}</td>";
                                    echo "<td><a href='update_product.php ?id={$value['product_id']}' class='btn btn-primary'>Edit</a></td>";
                                   echo "<td><a href='Delete_Product.php?id={$value['product_id']}'
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