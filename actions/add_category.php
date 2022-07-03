<?php
//allow access to product_controller
require("../controllers/product_controller.php");

//get brand name from the textbox
$cat_name=$_POST['category'];

//set the controller for adding brand to a variable
$check=add_cat_ctr($cat_name);
//check if the brand add controller works
if ($check) {
    echo"Added Sucessfully";
	header("location:../Admin/category.php");
}else{
	echo "Not Working";
}


?>
