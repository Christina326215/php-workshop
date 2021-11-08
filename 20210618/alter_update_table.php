<?php
require_once "../db_connect.php";

//修改資料表欄位名稱，把userName改成name
$sql="ALTER TABLE users CHANGE COLUMN userName name VARCHAR(30)";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

$conn->close();

?>