<?php
	include('classes/Class_Admin.php');
	$x 		= new Admin();
	$x->id 	= $_GET['id'];
	$x->DeleteAdmin();
	header('location:Add_Admin.php');?>