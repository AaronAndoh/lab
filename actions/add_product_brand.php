<?php
//allow access to product_controller
require("../controllers/product_controller.php");

//get brand name from the textbox
$brand_name=$_POST['brand'];

//set the controller for adding brand to a variable
$check=Add_brand_ctr($brand_name);
//check if the brand add controller works
if ($check) {
	echo"Added Sucessfully";
	header("location:../Admin/product.php");
}else{
	echo "Not Working";
}


?>