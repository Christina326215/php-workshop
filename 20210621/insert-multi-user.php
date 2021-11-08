<?php
require_once "../db_connect.php";

$now=date('Y-m-d H:i:s');

$sql="INSERT INTO users (name, account, email, phone, create_time) 
    VALUES ('Mike', 'mike', 'mike@test.com', '0922222222', '$now');";
$sql.="INSERT INTO users (name, account, email, phone, create_time) 
    VALUES ('Sue', 'sue', 'sue@test.com', '0922222222', '$now');";
$sql.="INSERT INTO users (name, account, email, phone, create_time) 
    VALUES ('Helen', 'helen', 'helen@test.com', '0922222222', '$now');";

if ($conn->multi_query($sql) === TRUE) {
    echo "新增資料完成";
    
} else {
    echo "新增資料錯誤: " . $conn->error;
}

?>