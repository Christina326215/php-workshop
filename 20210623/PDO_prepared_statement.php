<?php
require_once("../PDO_connect.php");

$stmt=$db_host->prepare("SELECT * FROM users WHERE account = :account");
$account="jack";
try{
    $stmt->execute(array(":account"=>$account));
    while($row=$stmt->fetch()){
        print_r($row);
        echo "<br>";
    }

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}

?>