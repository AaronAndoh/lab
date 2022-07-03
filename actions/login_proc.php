<?php 
//connnect to controller
require("../controllers/customer_controller.php");

//storing inputs into variables
$login_email=$_POST['email_login'];
$login_password=$_POST['Password_login'];


//variable for the login control
$check_login = login_ctr($login_email,$login_password);
$data = $check_login['customer_pass'];
$password_check = password_verify($login_password,$data);

//check if the control function works
if ($check_login){


	if($password_check)
	{
		session_start();

		$_SESSION['user_role'] = $check_login['user_role'];
		$_SESSION['customer_id'] = $check_login['customer_id'];

		if($_SESSION['user_role'] == 1)
		{
			header("location:../Admin/brand.php");

		}
		else{
			header("location:../index.php");
		}
	}else{
		echo "failed";
	}
	
}
else{
	echo "failed";}


 ?>