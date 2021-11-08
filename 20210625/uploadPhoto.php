<?php
require_once("../pdo_connect.php");
$product_id=1;

if($_FILES["file"]["error"]==0){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/". $_FILES["file"]["name"])){
        echo "Upload success!<br>";
    }else{
        echo "Upload fail!!<br>";
    }

}

// print_r($_FILES);
$file_name=$_FILES["file"]["name"];
// echo $file_name;
$sql="INSERT INTO product_photos (img_name, product_id) VALUES (?, ?)";
$stmt=$db_host->prepare($sql);

try{
    $stmt->execute([$file_name, $product_id]);
    echo "新資料已建立";

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}


$db_host=null;
header("location: photo-list.php");

?>