<?php

require("../controllers/customer_controller.php");
//setting variables for the inputs from the register form

$name = $_POST['Name_signup'];
$email = $_POST['email_signup'];
$password = $_POST['Password_signup'];
$country = $_POST['country_signup'];
$city = $_POST['city_signup'];
$contact = $_POST['contact_signup'];
$image = $_POST['image_signup'];



// check whether function works
$check=register_ctr($name,$email,$password,$country,$city,$contact,$image);
if ($check) {
	//redirect to the login page
	header("Location: ../login/login.php");
	exit();

}else{
	echo "not working";
}


?>