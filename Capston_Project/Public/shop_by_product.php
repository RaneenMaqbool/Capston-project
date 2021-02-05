

<?php
$con=mysqli_connect("localhost","root","","capstone");

    session_start();
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
                    <h2>Shop</h2>
                    <ul class="breadcrumb" style="background:#EB596E">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
           
                <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                      

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                       
                                        
                                        <?php
                                        $con=mysqli_connect("localhost","root","","capstone");
                                        $query="select * from product" ;
                                         $result=mysqli_query($con,$query);
                                         while($row=mysqli_fetch_assoc($result)){
                                            echo "<div class='col-sm-6 col-md-6 col-lg-4 col-xl-4'>";
                                            echo "<div class='products-single fix'>";
                                            echo "<div class='box-img-hover'>";
                                            echo "<div class='type-lb'>";
                                            echo "<p class='new'>New</p>";
                                            echo "</div>";
                                                 

                                            echo "<img src='../Vendor/images/{$row['images']}' class='img-fluid' alt='Image' style='width:300px;height:400px;'>";
                                            echo  "<div class='mask-icon'>";
                                            echo "<ul style='background:#EB596E'>";
                                
                                            echo "</ul>";
                                            echo "<a class='cart' href='shop-detail.php?id=$row[product_id]' style='background:#EB596E'>View Details</a>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<div class='why-text'>";
                                            echo "<h4>{$row['product_name']}</h4>";
                                            echo  "<h5> {$row['product_price']}</h5>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            $_SESSION['category_id']=$row['category_id'];                                             
                                      }
                                    
                                 
                                      ?>
                                    
                                  
                                    </div>
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
 
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
     <!-- Start Footer  -->
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