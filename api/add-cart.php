<?php
session_start();
$id=$_POST["id"];
// $id=1;
// $amount=$_POST["amount"];

$data=array(
    $id=> 1
);

// $_SESSION["cart"]=array();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=array();
}

$product_exist=false;
foreach($_SESSION["cart"] as $value){
    if(array_key_exists($id, $value)){
        $product_exist=true;
        break;
    }
}

if(!$product_exist){
    array_push($_SESSION["cart"], $data);
    $msg=array(
        "status"=>1,
        "cart"=>$_SESSION["cart"]
    );
}else{
    $msg=array(
        "status"=>0,
        "cart"=>$_SESSION["cart"]
    );
}

echo json_encode($msg);


?>