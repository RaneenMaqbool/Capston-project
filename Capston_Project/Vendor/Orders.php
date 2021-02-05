<?php
include("includes/header.php");
 ?>


<?php
include('classes/Class_Product.php');
$x=new product();
?>



	<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main" style="background:#EDF4F8">
			<!-- MAIN CONTENT -->
			<div class="main-content">
			



<div class="container-fluid">
					<div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-9">
                        	<div class="panel" style="background:#FFFFFF">
								<div class="panel-heading">
									<h3 class="panel-title" >Order Information</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Order#</th>
									            <th> Name</th>
									            <th> Mobile</th>
									            <th>Product</th>
									            <th>Quantity</th>
									            <th>Image</th>
									            <th>Total</th>
									            <th>Done</th>
									            <th>Reject</th>
											</tr>
										</thead>
										<tbody>
                    			<?php
                                if($data = $x->Read_Orders()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['customer_name']}</td>";
                                        echo "<td>";
                                        echo $value['customer_mobile'];
                                        echo "</td>";

                                        echo "<td>{$value['name']}</td>";
                                        echo "<td>{$value['qty']}</td>";
                                          echo "<td>";
                                            echo "<img src='images/{$value['imageee']}' style='width:100px;height:100px'>";
                                        echo "</td>";                  
                                        echo "<td>{$value['total']}</td>";
                                        echo "<td>{$value['price']}</td>";
                                        
                                       echo "<td><a href='Delete_order.php?id={$value['order_id']}'
                                        class='btn btn-primary'>Done</a></td>"; 
                                     echo "<td><a href='Delete_order.php?id={$value['order_id']}'
                                        class='btn btn-danger'>Reject</a></td>"; 
                                    
                                    $r=$value['customer_name'];
                                    $r1=$value['customer_mobile'];
                                    $r2=$value['name'];
                                    $r3=$value['qty'];
                                    $r4=$value['imageee'];
                                    $r5=$value['total'];
                                    $r6=$value['price'];
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