<?php    session_start();

?>

<?php

$con=mysqli_connect("localhost","root","","capstone");
?>
<!DOCTYPE html>
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

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div>
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> 0776532579</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
            <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/Company1.gif" class="logo" alt="" width="140" height="70"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
                            <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">LOGIN</a>
                            <ul class="dropdown-menu">
                                <li><a href="../Admin/Form.php">Admin</a></li>
                                <li><a href="../Vendor/Login/Form.php">Vendor</a></li>
                                <li><a href="#">Customer</a></li>
                            </ul>
                        </li>
                                  <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="Login/Form.php">My orders</a></li>
                                <li><a href="cart.php">My cart</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                  
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop_by_product.php">By Product</a></li>
                                <li><a href="Shop_by_category.php">By Categories</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item"><a class="nav-link" href="contact_us.php">CONTACT </a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"><?php
                                $query="select COUNT(cart_id) As cart from carts";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo $row['cart'];
                                }
                                    
                                
                                ?></span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            
             <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <?php
$query="select * from carts";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
                        echo "<li>";
                        echo "<a href='#' class='photo'><img src='../Vendor/images/{$row['image']}'";
                        echo "class='cart-thumb' alt='' /></a>";
                        echo "<h6><br><a href='#'>{$row['name']} </a></h6>";
                        echo "<br><p><span class='price'><span style='font-weight:bold'>
                        Price:    </span>{$row['price']}</span></p>";
                        echo "<p><span class='price'><span style='font-weight:bold'>
                        Qty:    </span>{$row['qty']}</span></p>";
                        echo "</li>";
                      
                                }
                        $query="select SUM(alltotal) as tot from carts";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
                            $v=$row['tot'];

}
                          echo "<li class='total'>";
                           echo  "<a href='cart.php' class='btn btn-default hvr-hover btn-cart' style='background:#EB596E'>VIEW CART</a>";
                        error_reporting(0);
                        echo  "<span class='float-right'><strong>Total</strong>:$v</span>";
                        echo "</li>";
                      ?>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
            
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb" style="background:#EB596E">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
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
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <?php
                                $query="select * from carts";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                 $nn=$row['name'];

                                }
                                $query="select * from product where product_name='$nn'";
                                $result=mysqli_query($con,$query);
                                   while($row=mysqli_fetch_assoc($result)){
                                       $ll=$row['vendor_id'];
                                   }
                                
                                
                                $query="select * from carts";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
                        
                        $kn=$row['name'];
                      
                                }
                                    $query="select * from product";
                                    $result=mysqli_query($con,$query);
                                   while($row=mysqli_fetch_assoc($result)){
                                      if($row['product_name']=='$kn'){
                                          $vv=$row['vendor_id'];
                                      }}
                               
                                $query="select * from carts";
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
                                        <p>$ {$row['price']}</p>";
                                    echo "</td>";
                                    echo "<td class='quantity-box'><input type='number' size='4' value='{$row['qty']}' min='0' step='1' class='c-input-text qty text' disabled></td>";
                                   echo "<td class='price-pr'>
                                        <p>$ {$row['alltotal']}</p>";
                                    echo "</td>";
                                   
                                echo "</tr>";
                                    $im=$row['image'];
                                    $v=$row['alltotal'];
                                    $k=$row['qty'];
                                    $nn=$row['name'];
                                    $p=$row['price'];
                                    $tt=$row['alltotal'];
                                    
                     
                                    
                                
                                        
                                if(isset($_POST['Add'])){
                              $cust=$_SESSION['customer_id'];
                              $query="insert into orders(customer_id ,vendor_id,qty,imageee,price,name,total)
                        values('$cust',2,'$k','$im','$p','$nn','$tt')";
                                mysqli_query($con,$query);
                          echo '<meta http-equiv="refresh" content="0">';

                               }}

                                   
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
              
     
            
        </div>

<?php
             $query="select * from carts";
                               
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    $v=$row['total'];
                                }
             echo "<hr>";
                echo  "<div class='d-flex gr-total'>";
                echo "<h5> Total</h5>";
                echo "<div class='ml-auto h5'> $v </div>
                </div>";
                echo "<hr>";
                echo "<form method='post' action=''>";
                echo "<input type='submit' value='Send Order' name='Add' class='col-2 d-flex shopping-box' class='ml-auto btn hvr-hover'  style='background:#EB596E;text-align:center;padding-left:50px;padding-top:5px;padding-bottom:5px;font-size:16px;font-weight:bold'>";
                
               echo "</form>";
               echo "<br>";
                     $cust=$_SESSION['customer_id'];
             $query="select  order_id from orders where customer_id='$cust' LIMIT 1";
                            $result=mysqli_query($con,$query);
                        while($row=mysqli_fetch_assoc($result)){
                            $order=$row['order_id'];
                        }
 echo  "<div class='d-flex gr-total'>";
                echo "<h5> Order number</h5>";
                error_reporting(0);
                echo "<div class='ml-auto h5';style='margin-right:50px;'>$order</div>
                </div>";
                echo "<hr>";
            
?>
          

        </div>
    </div>
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