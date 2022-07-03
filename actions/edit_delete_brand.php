<?php
//gives acesss to product controller file
require ("../controllers/product_controller.php");

//get the brand id
$id= $_POST['brand_id'];

//the controller for delete into a variable
$del_check = delete_brand($id);

//checks if the delete function works
if($del_check){
    header("location:../Admin/edit_brand.php");
}else{
    echo "not working";
}

?>