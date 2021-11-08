<?php
require_once "../db_connect.php";

//刪除欄位account之索引
$sql="ALTER TABLE users DROP INDEX account";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

$conn->close();

?>