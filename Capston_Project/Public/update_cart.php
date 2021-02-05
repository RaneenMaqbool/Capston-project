
<?php
  $con=mysqli_connect("localhost","root","","capstone");
  if(isset($_POST['update'])){
 $id=$_GET['id'];
  $xc=$_POST['qty'];
   $p=$_POST['price'];
  $total=$xc*$p;
  $query="update carts set qty='$xc',alltotal='$total' where cart_id ='$id'";
        mysqli_query($con,$query);
      if($query){
        header("location:cart.php");
        exit;
    }}
  


  ?>
  <html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ATOMKIT SHOP</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
     .slides-pagination a.current{
     background: #EB596E;
     border: 2px solid #EB596E;
}
     .footer-widget h4::before {
     border-bottom: 3px solid #EB596E;
     content: "";
     height: 3px;
     width: 100%;
     position: absolute;
     bottom: 3px;
     left: 0px;
}
     .footer-link h4::before {
     border-bottom: 3px solid #EB596E;
     content: "";
     height: 3px;
     width: 100%;
     position: absolute;
     bottom: 3px;
     left: 0px;
}
    .footer-link-contact h4::before {
    border-bottom: 3px solid #EB596E;
    content: "";
    height: 3px;
    width: 100%;
    position: absolute;
    bottom: 3px;
    left: 0px;
}
     #back-to-top {
     position: fixed;
     bottom: 40px;
     right: 40px;
     z-index: 9999;
     width: 32px;
     height: 32px;
     text-align: center;
     line-height: 30px;
     background: #EB596E;
     color: #ffffff;
     cursor: pointer;
     border: 0;
     border-radius: 2px;
     text-decoration: none;
     transition: opacity 0.2s ease-out;
     font-size: 30px;
}
    update-box:hover{
        background:#EB596E;
    }
    .update-box input[type="submit"]:hover {
                background:#EB596E;

    }
</style>
</head>
    <form method="post">
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="background:#EB596E">Images</th>
                                    <th style="background:#EB596E">Product Name</th>
                                    <th style="background:#EB596E">Price</th>
                                    <th style="background:#EB596E">Quantity</th>
                                    <th style="background:#EB596E">Total</th>
                                    <th style="background:#EB596E">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $id=$_GET['id'];
                                $query="select * from carts where cart_id=$id";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo  "<td class='thumbnail-img'>";
                                echo "<a href='#'>";
								echo "<img class='img-fluid' src='../Vendor/images/{$row['image']}' alt='' />";
								echo "</a>";
                                echo "</td>";
                                echo "<td class='name-pr'>";
                                echo "<a href='#'>";
								echo "<span style='font-size:16px;'>{$row['name']}</span>";	
								echo "</a>";
                                echo "</td>";
                                    echo "<td class='price-pr'>
                                        <p>$ <input type='text' value='{$row['price']}' name='price' readonly></p>";
                                    echo "</td>";
                                    echo "<td class='quantity-box'><input type='number' size='4' value='{$row['qty']}' min='0' step='1' class='c-input-text qty text' name='qty'></td>";
                                   echo "<td class='price-pr'>
                                        <p>$ {$row['alltotal']}</p>";
                                    echo "</td>";
                                    echo "<td class='remove-pr'>";
                                    echo "<a href='delete_Cart.php?id={$row['cart_id']}'>";
									echo "<i class='fas fa-times'></i>";
								    echo "</a>";
                                    echo "</td>";
                                echo "</tr>";}
                          
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                      
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit" syle="background:#EB596E" name="update">
                    </div>
                </div>
            </div>

            
            
            
        </div>
        </div></form>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->

    <!-- End Instagram Feed  -->


   <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Atomkit</h4>
                            <p>Atomkit submitted a proposed development plan for the second phase of new construction for our Arlington headquarters. We’re fostering an open and inviting community by creating a new destination for local residents. Our plans infuse nature into the urban landscape and create a unique, sustainable environment where our employees can work and invent for our customers.
                                </p>
                            <ul>
                                <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                               
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                
                               
        
                                <li><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Makaa Mall <br>Alhussien Bussines Park<br> Floor 32 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">0776532579</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">Atomkit21@Atomkit.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">By colorful</a> Edited By :
            <a href="https://html.design/">Raneen Forsan</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;" style="color:#EB596E">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>