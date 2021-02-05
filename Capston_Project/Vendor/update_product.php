<?php
include('classes/Class_Product.php');

$x = new product();
$x->id = $_GET['id'];
$m=$x->id;

if ($row = $x->UpdateproductByID()) {
    foreach ($row as $key => $value) {
    }
}

if (isset($_POST['Update'])) {
    $x->product_name                   = $_POST['name'];
    $x->product_price                  = $_POST['price'];
    $x->product_desc                   = $_POST['desc'];
   

if ($_FILES['images']['name'] != ""){
        $x->images              = $_FILES['images']['name'];
        $temp_name              = $_FILES['images']['tmp_name'];
        $path                   = "images/";
        move_uploaded_file($temp_name,$path.$x->images);      
    }else{
           foreach ($row as $value) {
                $x->images = $value['images'];
            }
    }
    
    $x->category_id                    = $_POST['category'];
    $x->qty                            = $_POST['Quantity'];
    $x->vendor_id                      = $_SESSION['vendor_id'];
    $x->Updateproduct();
    header("location:Add_product.php");
}
?>
<?php
include('includes/header.php');?>



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
									<h3 class="panel-title" style="font-size:20px;">Update Product</h3>
								</div>
								<div class="panel-body">
									
									<br>
									<input class="form-control" placeholder="Product name" type="text" name="name" value="<?php echo $value['product_name']; ?>">
									<br>
									<input class="form-control" placeholder="Product price" type="text" name="price" value="<?php echo $value['product_price']; ?>">
									<br>
								   <input class="form-control" placeholder="Product Description" type="text" name="desc" value="<?php echo $value['product_des'];?>">
                                   <br>

                                     <input class="form-control" placeholder="Product Quanitiy" type="text" name="Quantity" value="<?php echo $value['qty'];?>">
									<br>
                                    <input class="form-control" placeholder="Upload Product Image Below" type="text" disabled>
									<br>
                                    <?php echo "<img name='images' src='images/{$value['images']}' width='90px' style='float:left'>" ?>
                                     <input class="form-control" placeholder="Product image" type="file" name="images">
									<br>
                                    
                                    
									<select class="form-control" name="category">
										<option value="cheese">Choose Category</option>
                                        <?php  
    $con=mysqli_connect("localhost","root","","capstone");
        $query="select * from category";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        $i=$row['category_id'];
       echo "<option value='$i'";
            if($value['category_id']==$row['category_id']){
                echo "selected";
                echo">";
                echo $row['category_name'];
                echo"</option>";

            }
            else{
                echo "<option value='$i'>";
                echo $row['category_name'];
                 echo"</option>";

            }
       
       
       }
           
        ?>
                                                   
                                           
                                                    
									</select>
									<br>
                                    
                                   <br>
								<input type="submit" class="btn btn-primary"  value="Update" name="Update">
								</div>
                                </form>
                                	
								
						
							</div></div>
                        
							<!-- END INPUT SIZING -->
						
                        </center>
                            
                    </div></div></div>

    <?php 
echo "<center>";
include('includes/footer.php');
echo "</center>";



?>

      