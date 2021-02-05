

<?php
include('classes/Class_Admin.php');
$x=new Admin();
if (isset($_POST['Add'])) {
    
    $x->email                           = $_POST['Admin_email'];
    $x->password                        = $_POST['Admin_password'];
    $x->image                           = $_FILES['image']['name'];
    $temp_name                          = $_FILES['image']['tmp_name'];
    $path                               = "images/";
    move_uploaded_file($temp_name,$path.$x->image);
    $x->admin_name                      = $_POST['Admin_name'];
    $x->CreateAdmin();
    echo '<meta http-equiv="refresh" content="0">';
}
?>


<?php 
include("includes/header.php");
 ?>
                
 

				<div class="span9">
					<div class="content">

						<div class="module" style="background:#FFFFFF" id="ll">
							<div class="module-head" style="background:#FFFFFF" id="k">
								<h3 style="color:#001727;font-size:16px;" id="nnn">Add Admin</h3>
							</div><hr>
							<div class="module-body" >

									
									
								

								

									<form class="form-horizontal row-fluid" method="post" action="" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput" >Category Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category name" class="span8" name="category_name" >
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput" >Category Description</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category Description" class="span8" name="category_description" class="ccc">
												
											</div>
										</div>

								    <div class="control-group">
											<label class="control-label" for="basicinput">Category Image</label>
											<div class="controls">
				                  <input name="image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa" id="basicinput">
												
											</div>
										</div>
                                    <br><br><div class="controls">
									<input type="submit" value="Add Admin"class="btn btn-outline-secondary" style="padding:10px 20px;font-size:14px;border:1px solid #4E9CB2;background:#2A4AC0;color:#fff" name="Add">
									
                                   
									 </div>

									</form>
                
					
							  </div>
                              </div> 
                        
                        		
                        <div class="module">
							<div class="module-head" style="background:#FFFFFF" id="oo">
								<h3 style="color:#171727;font-size:16px;" id="fon">Added Admin</h3>
							</div>
							<div class="module-body" style="background:#ffffff">
						
								<table class="table">
								  <thead>
									<tr>
									  <th>Email</th>
									  <th>Image</th>
									  <th>Name</th>
									  <th>Update</th>
									  <th>Delete</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if ($data =$x->ReadAdmin()) {
                                    foreach ($data as $key => $value) {
                                        echo "
                                        <tr>
                                        <td>
                                            <span id='email'>{$value['email']}</span>
                                        </td>
                                        
                                        
                                        <td>
                                            <img src='images/{$value['image']}' style='width:100px;height:100px'>
                                        </td>
                                        <td>
                                            {$value['admin_name']}
                                        </td>
                                        <td><a href='update_Admin.php?id={$value['admin_id']}' class='btn btn-primary' style='background:#2A4AC0'>Update</a></td>

                                        <td><a href='delete_Admin.php?id={$value['admin_id']}' class='btn btn-danger'>Delete</a></td>
                                        </tr>
                                        ";
                                    }
                                }
                            
                             
                          ?>
								  </tbody>
								</table>
                                    </div>
                                </div>
								</div>
								<br />
								<br />

                               </div>
                         


			
<?php 
echo "<center>";
include("includes/footer.php");
echo "</center>";

 ?>