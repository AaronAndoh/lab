<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//--INSERT--//
function register_ctr($a, $b, $c, $d, $e, $f, $g)
{

// creating an instance
  $add = new general_class();

// return method
  return $add->register_cls($a, $b, $c, $d, $e, $f, $g);
}

// Adds brands to the database
function Add_brand_ctr($a){

  //creating an instance of the class
  $add_admin = new general_class();

  //return method
  return $add_admin->Add_brand_cls($a);

}

//--Login--//

//login function
function login_ctr($a,$b)
{
  //creating an instance of the class
  $login=new general_class();

  //return method
  return $login->Login_cls($a,$b);
}

//retriving the brands
function get_all_brands_ctr(){

  //creating instance of the class
  $brand_view = new general_class();

  //return method
  return $brand_view->get_all_brands_cls();


}

//deleting brand from database
function delete_brand($a){

  $brand_delete = new general_class();

  return $brand_delete->Delete_brand_cls($a);
}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>