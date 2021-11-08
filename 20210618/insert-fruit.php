<?php
//檢查是否連線資料庫
require_once "../db_connect.php";

//檢查是否帶入資料
if(isset($_POST["fruit"])){
    $fruit=$_POST["fruit"];
}else{
    echo "沒有帶資料";
    exit;
}


$fruit=$_POST["fruit"];
$intro=$_POST["intro"];

//新增欄位之內容
$sql="INSERT INTO fruit (name , intro) 
    VALUES ('$fruit', '$intro')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
} else {
    echo "新增資料錯誤: " . $conn->error;
}

$conn->close();

header('location: create-fruit.php');


?>