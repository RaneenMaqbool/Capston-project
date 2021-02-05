<?php
	session_start();
	if (isset($_SESSION['vendor_email'])) {
		unset($_SESSION['vendor_email']);
		header("location:Login/Form.php");
	}else{
		header("location:index.php");
	}

