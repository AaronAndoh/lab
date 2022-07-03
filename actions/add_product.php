<?php

require("../controllers/product_controller.php");
require("../functions/image_storage.php");

//setting variables for the inputs from the register form



if(isset($_POST['product_add'])){
    $cat_name = $_POST['cat_name'];
    $b_name = $_POST['product_brand'];
    $p_title = $_POST['product_title'];
    $p_price = $_POST['product_price'];
    $p_desc = $_POST['product_description'];
    $p_image = $_POST['Product_image'];
    $p_keywords = $_POST['product_keywords'];

//     // check whether function works
  echo "<pre>";
print_r($_FILES['Product_image']);
  echo "</pre>";

  $img_name = $_FILES['Product_image']["name"];
  $img_size = $_FILES['Product_image']['size'];
  $tmp_name = $_FILES['Product_image']['tmp_name'];
  echo "$p_image";

 

            $folder=file_Upload("images","products",$tmp_name,$img_name);

             $check=add_product_ctr($cat_name,$b_name,$p_title,$p_price,$p_desc,$folder,$p_keywords);
            if ($check) {
                //redirect to the login page
                echo"Added Sucessfully";
                header("Location: ../view/view_product.php");
                exit();

            }else{
                echo "not working";
            }



    }
  
   
else{
    echo"me";
   
}


?>