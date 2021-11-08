<?php
require_once("../PDO_connect.php");

$id=$_GET["id"];
$stmt=$db_host->prepare("SELECT * FROM users WHERE id = :id");

try{
    $stmt->execute(array(":id"=>$id));
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