<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//--INSERT--//

// Adds brands to the database
function Add_brand_ctr($a){

  //creating an instance of the class
  $add_admin = new product_class();

  //return method
  return $add_admin->Add_brand_cls($a);

}

// Adds categories to the database
function add_cat_ctr($a){

    //creating an instance of the class
    $add_cat = new product_class();

  //return method
    return $add_cat->add_cat_cls($a);
}


 function add_product_ctr($a,$b,$c,$d,$e,$f,$g){

  $add_product = new product_class();

  return $add_product->add_product_cls($a,$b,$c,$d,$e,$f,$g);
 }

 function add_product_brand_ctr($a){
  $product_brand = new product_class();

  return $product_brand->add_product_brand_cls($a);
 }


function add_cart_ctr($a,$b,$c){
  $add_cart = new product_class();
  echo "lo";
  // return "l";

  return $add_cart ->add_cart_cls($a,$b,$c);

}









//retriving the categories
function get_all_cat_ctr(){

  //creating instance of the class
  $brand_view = new product_class();

  //return method
  return $brand_view->get_all_cat_cls();


}

function get_all_brands_ctr(){

    //creating instance of the class
    $brand_view = new product_class();
  
    //return method
    return $brand_view->get_all_brands_cls();
  
  
  }

  function get_all_products_ctr(){

    //creating instance of the class
    $product_view = new product_class();
  
    //return method
    return $product_view->get_all_product_cls();
  
  
  }


  function get_all_product_search_ctr($a){

    //creating instance of the class
    $product_views = new product_class();
  
    //return method
    return $product_views->get_all_product_search_cls($a);
  
  }
  

//--SELECT--//
function get_one_brand_ctrl($a){
    $select_one = new product_class();


    return $select_one->get_one_brand_cls($a);
}
function get_one_cat_ctr($a){
    $select_one = new product_class();


    return $select_one->get_one_cat_cls($a);
}

function get_one_product_ctr($a){
  $select_one = new product_class();


  return $select_one->get_one_product_cls($a);
}

//--UPDATE--//
Function update_brand_ctr($a,$b){

    $brand_update = new product_class();

    return $brand_update-> update_brand_cls($a,$b);

}

Function update_cat_ctr($a,$b){

    $brand_update = new product_class();

    return $brand_update-> update_cat_cls($a,$b);

}
function update_product_ctr($a,$b,$c,$d,$e,$f,$g,$h){
  $product_update = new product_class();

  return $product_update->update_product_cls($a,$b,$c,$d,$e,$f,$g,$h);
}

//--DELETE--//

//deleting brand from database
function delete_brand($a){

    $brand_delete = new product_class();
  
    return $brand_delete->Delete_brand_cls($a);
  }
  
  
  //deleting brand from database
  function delete_cat_ctr($a){
  
      $brand_delete = new product_class();
    
      return $brand_delete->Delete_cat_cls($a);
    }



    function delete_product_ctr($a){
  
      $brand_delete = new product_class();
    
      return $brand_delete->Delete_product_cls($a);
    }
?>