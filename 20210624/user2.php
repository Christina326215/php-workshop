<?php
require_once("../PDO_connect.php");

$id=$_GET["id"];
$sql="SELECT * FROM users WHERE id = ?";
$stmt=$db_host->prepare($sql);
$stmt->execute([$id]);  //使用非關聯式陣列的方式

try{
    while($row=$stmt->fetch()){
        echo $row["id"].". ".$row["name"].": ".$row["email"];
        echo "<br>";
    }

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}


$db_host=null;
?>