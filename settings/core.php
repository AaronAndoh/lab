<?php
//start session
session_start(); 

//for header redirection
ob_start();

//function to check for login
function is_user_logged_in(){
	if ($_SESSION["customer_id"]){
		return true;
	} else {
		return false;
	}
}




//function to get user ID
function get_session_user_id(){
	return $_SESSION["customer_id"];

}


//function to check for role (admin, customer, etc)
function is_session_user_admin(){
	//admin role is 1;
	return $_SESSION["user_role"] == 1;
}


?>