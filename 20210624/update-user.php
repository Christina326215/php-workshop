<?php
require_once("../PDO_connect.php");
$sql="UPDATE users SET name=?, email=? WHERE id= ?";
$stmt=$db_host->prepare($sql);

$name="Adam";
$email="adam@test.com";
$id=10;


try{
    $stmt->execute([$name, $email, $id]);
    echo "資料修改完成";

}catch(PDOException $e){
    echo "資料庫修改失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}

$db_host=null;



?>