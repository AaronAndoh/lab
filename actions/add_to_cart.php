<?php
//allow access to product_controller
require_once("../controllers/product_controller.php");

// // echo "test";
// // exit();
session_start();
// //get brand name from the textbox
$pid=$_GET['pid'];
$cid =$_SESSION['customer_id'];

// exit();
$ipaddress = $_SERVER["REMOTE_ADDR"];

// // echo $ipaddress;
// // exit();

// //print_r($_SESSION);

// //set the controller for adding brand to a variable
// echo "before";
// exit();

$check=add_cart_ctr($pid,$ipaddress,$cid);

//check if the brand add controller works
if ($check) {
	header("location:../view/cart.php");
}else{
	echo "Not Working";
}


?>
