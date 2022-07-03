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

class product_class extends db_connection
{


//--------------------------------------------------------------------------------------------------------------------->>
//select
	//function to register users into the database
	function get_one_brand_cls($a){

        $sql="SELECT `brand_name` ,`brand_id` FROM `brands` WHERE `brand_id`='$a'";

        return $this->db_fetch_one($sql);
    }

    function get_one_cat_cls($a){

        $sql="SELECT `cat_name` ,`cat_id` FROM `categories` WHERE `cat_id`='$a'";

        return $this->db_fetch_one($sql);
    }


	//Retriving the brands
	function get_all_brands_cls(){

        //sql query to select all brand
        $sql="SELECT * FROM `brands`";

        return $this->db_fetch_all($sql);
    }

    //Retriving the brands
	function get_all_cat_cls(){

        //sql query to select all brand
        $sql="SELECT * FROM `categories`";

        return $this->db_fetch_all($sql);
    }

    function get_all_product_cls(){

        // //sql query to select all brand
        // $sql ="SELECT products.product_id, brand.brand_name,categories.cat_name
        // FROM ((`products`
        // INNER JOIN `brands` ON products.product_brand = brands.brand_id)
        // INNER JOIN `categories` ON products.product_cat=categories.cat_id)";

        $sql="SELECT * FROM `products`";

        return $this->db_fetch_all($sql);
    }

    function get_one_product_cls($a){

        $sql="SELECT `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords` FROM `products` WHERE `product_id`='$a'";

        return $this->db_fetch_one($sql);
    }


    function get_all_product_search_cls($a){

        $sql="SELECT * FROM `products` WHERE `product_keywords`='$a'";

        return $this->db_fetch_all($sql);
    }


    




//--------------------------------------------------------------------------------------------------------------------->>
//--UPDATE--//
function update_brand_cls($a,$b){

    $sql = "UPDATE `brands` SET `brand_name`='$a' WHERE `brand_id`=$b";

    return $this->db_query($sql);
//sql query to update 

}

function update_cat_cls($a,$b){

    $sql = "UPDATE `categories` SET `cat_name`='$a' WHERE `cat_id`=$b";

    return $this->db_query($sql);
//sql query to update 

}

function update_product_cls($a,$b,$c,$d,$e,$f,$g,$h){
    
    $sql="UPDATE `products` SET `product_cat`='$a',`product_brand`='$b',
    `product_title`='$c',`product_price`='$d',`product_desc`='$e',`product_image`='$f',`product_keywords`='$g' WHERE `product_id`=$h";
    return $this->db_query($sql);
}





//--------------------------------------------------------------------------------------------------------------------->>
//--DELETE--//
//deleting from the database
function Delete_brand_cls($a){
    //Sql query to delete brand
    $sql= "DELETE FROM `brands` WHERE `brand_id` = '$a'";

    return $this->db_query($sql);
}


function Delete_cat_cls($a){
    //Sql query to delete brand
    $sql= "DELETE FROM `categories` WHERE `cat_id` = '$a'";

    return $this->db_query($sql);

}

function Delete_product_cls($a){
    //Sql query to delete brand
    $sql= "DELETE FROM `products` WHERE `product_id` = '$a'";

    return $this->db_query($sql);
}







//--------------------------------------------------------------------------------------------------------------------->>


	//--INSERT--//
//Add the brand to the database
function Add_brand_cls($a){
    $sql= "INSERT INTO `brands`(`brand_name`) VALUES ('$a')";

    return $this->db_query($sql);
}

//Add the categories to the database
function add_cat_cls($a){
    $sql= "INSERT INTO `categories`(`cat_name`) VALUES ('$a')";

    return $this->db_query($sql);
}

//function to add product to database
function add_product_cls($a,$b,$c,$d,$e,$f,$g){
$sql="INSERT INTO `products`( `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`)
 VALUES ('$a','$b','$c','$d','$e','$f','$g')";

return $this->db_query($sql);
    }



function add_product_brand_cls($a){

    $sql="INSERT INTO `brands`(`brand_name`) VALUES ('$a')";
    return $this->db_query($sql);

}
function add_cart_cls($a,$b,$c){
    // return $this
    $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$a','$b','$c','1')";
    
    return $this->db_query($sql);
}

}


?>