<?php
session_start();


// print_r($_SESSION["cart"]);
$id=3;

$product_exist=false;
foreach($_SESSION["cart"] as $value){
    // print_r($value);
    if(array_key_exists($id, $value)){
        // echo "exist";
        $product_exist=true;
        break;
    }
    // else{
    //     $product_exist=false;
    // }
}

// if($product_exist){
//     echo "exist";
// }else{
//     echo "no";
// }

var_dump($_SESSION["cart"]);
?>