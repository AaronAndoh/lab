<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author Aaron Kwame Andoh
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	//function to register users into the database
	function register_cls($a, $b, $c, $d, $e, $f, $g)
	{
		// encrypting the password

		$password_encrypted = password_hash($c, PASSWORD_DEFAULT);

		//insert sql function
		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES ('$a','$b','$password_encrypted','$d','$e', '$f','$g','1')";

		return $this->db_query($sql);
	}


	//Add the brand to the database
	function Add_brand_cls($a){
		$sql= "INSERT INTO `brands`(`brand_name`) VALUES ('$a')";

		return $this->db_query($sql);
	}
	

	//--SELECT--//
	//function to login users into the system
	function Login_cls($email,$password){

		// encrypting the password
		$password_encrypted = password_hash($password, PASSWORD_DEFAULT);

		//select email and password for login.
		$sql = "SELECT `customer_id`,`customer_email`, `customer_pass`, `user_role` FROM `customer` WHERE `customer_email` ='$email'";

		return $this->db_fetch_one($sql);
	}


	//Retriving the brands
	function get_all_brands_cls(){

			//sql query to select all brand
			$sql="SELECT * FROM `brands`";

			return $this->db_fetch_all($sql);
		}





	//--UPDATE--//
	

	//--DELETE--//
	//deleting from the database
	function Delete_brand_cls($a){
		//Sql query to delete brand
		$sql= "DELETE FROM `brands` WHERE `brand_id` = '$a'";

		return $this->db_query($sql);
	}

}

?>