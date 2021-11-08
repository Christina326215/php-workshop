<?php
require_once "../db_connect.php";

//刪除資料表
$sql="DROP TABLE users";

//檢查資料表是否刪除成功
if ($conn->query($sql) === TRUE) {
    echo "資料表 users 刪除完成";
} else {
    echo "刪除資料表錯誤: " . $conn->error;
}

$conn->close();

?>