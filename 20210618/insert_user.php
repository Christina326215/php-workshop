<?php
require_once "../db_connect.php";

//新增欄位內容
$sql="INSERT INTO users (name, phone, email, account) 
    VALUES ('John', '0911111111', 'john@test.com', 'john')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
} else {
    echo "新增資料錯誤: " . $conn->error;
}

$conn->close();

    

?>