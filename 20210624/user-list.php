<?php
require_once("../PDO_connect.php");

$stmt=$db_host->prepare("SELECT * FROM users");
$account="jack";
try{
    $stmt->execute();
    while($row=$stmt->fetch()){  //取得關聯式陣列的值。 
        echo "<a href='user.php?id=".$row["id"]."'>".$row["id"].": ".$row["name"]."</a>";
        echo "<br>";
    }

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}


$db_host=null;
?>