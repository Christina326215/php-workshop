<?php
require_once("../PDO_connect.php");
// $id=$_POST["id"];
$id=1;
$sql="SELECT name,account,email,phone FROM users WHERE id = ?";
$stmt=$db_host->prepare($sql);
$stmt->execute([$id]);

try{
    // while($row=$stmt->fetch()){
    //     echo $row["id"].". ".$row["name"].": ".$row["email"];
    //     echo "<br>";
    // }
    $row=$stmt->fetch();
    // var_dump($row);
    echo json_encode($row);

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}


$db_host=null;


?>