<?php
require_once("../PDO_connect.php");


$sql="INSERT INTO users (name, phone, email, account, create_time, valid) VALUES (?,?,?,?,?,?)";
$stmt=$db_host->prepare($sql);

$name="Kelly";
$phone="0912222222";
$email="kelly@test.com";
$account="kelly";
$create_time=date('Y-m-d H:i:s');
$valid=1;

try{
    $stmt->execute([$name, $phone, $email, $account, $create_time, $valid]);
    echo "新資料已建立";

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}




?>