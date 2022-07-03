<?php
require ("../controllers/product_controller.php");
require("../view/edit_brand_.php");

$id= $_GET['brand_id'];
$name=$_POST['brand_update'];

echo"$id_info";
// $update_check = update_brand($name,$id_info);

// if($update_check){
//     header("location:../view/edit_brand.php");
// }else{
//     echo "not working";
// }

?>