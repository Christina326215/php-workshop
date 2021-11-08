<?php
require_once("../PDO_connect.php");

if(!isset($_SESSION["user"])){
    echo "您沒有登入";
    exit();
}

$sql="INSERT INTO user_order_product (user_id, order_time) VALUES (?, ?)";
$stmt=$db_host->prepare($sql);
$stmt->execute([$_SESSION["user"]["id"], date("Y-m-d H:i:s")]);
$order_id=$db_host->lastInsertId();
// echo $order_id;

foreach($_SESSION["cart"] as $product){
    foreach($product as $key=>$value){
        $sql="INSERT INTO user_order_product_detail (order_id, product_id, amount) VALUES (?, ?, ?)";
        $stmt=$db_host->prepare($sql);
        $stmt->execute([$order_id, $key, $value]);
    }
}

?>