<?php
//gives acesss to product controller file
require ("../controllers/product_controller.php");

//get the brand id
$id= $_POST['product_id'];

//the controller for delete into a variable
$del_check = delete_product_ctr($id);

//checks if the delete function works
if($del_check){
    header("location:../view/view_product.php");
}else{
    echo "not working";
}
