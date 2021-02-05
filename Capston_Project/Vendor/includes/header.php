
<?php
    session_start();
    if (!isset($_SESSION['vendor_email'])) {
        header("location:./Login/Form.php");
    }

?>



<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body style="background:#EEF5F9">
	<!-- WRAPPER -->
	<div id="wrapper" style="background:#EEF5F9">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="background:#0081c2">
				<a href="index.php" style="color:#fff;font-size:20px;font-weight:bold;font-style:italic">Vendor Panel</a>
			</div>
			<div class="container-fluid" style="background:#1C81D9">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
			
			
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
				
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background:#1C81D9"> <span style="color:#ffffff;font-size:18px;font-weight:bold"><?php echo $_SESSION['vendor_name'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								  <?php
$con=mysqli_connect("localhost","root","","capstone");
        $query="select * from vendors order by vendor_id limit 1";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
             echo "<li><a href='UserDetails2.php?id={$row['vendor_id']}'><i class='lnr lnr-user'></i><span>My Profile</span></a></li>";}?>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar" style="background:#FFFFFF">
			<div class="sidebar-scroll">
				<nav>
				<ul class="nav">
						<li><a href="index.php" class="" style="color:#54667a;font-size:16px;"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="Add_product.php" class="active" style="color:#fff;font-size:16px;"><i class="lnr lnr-chart-bars"></i> <span>Add Product</span></a></li>
						<li><a href="Orders.php" class="" style="color:#54667a;font-size:16px;"><i class="lnr lnr-chart-bars"></i> <span>Orders</span></a></li>
						
						
					
						<li><a href="Add_post.php" class="" style="color:#54667a;font-size:16px;"><i class="lnr lnr-dice"></i> <span>Post</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>