<?php
require_once "../db_connect.php"; //檢查連線資料庫

//創建新資料表users
$sql = "CREATE TABLE users (   
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30),
    email VARCHAR(30)
    )";

//檢查資料表是否新創建成功
if ($conn->query($sql) === TRUE) {
    echo "資料表 users 建立完成";
} else {
    echo "建立資料表錯誤: " . $conn->error;
}

$conn->close();

?>