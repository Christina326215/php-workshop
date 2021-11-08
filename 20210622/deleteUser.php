<?php
require_once "../db_connect.php";

$id=$_GET["id"];
// echo $id;
// $sql="DELETE FROM users WHERE id='$id'";
// if ($conn->query($sql) === TRUE) {
//     echo "刪除資料完成";    
// } else {
//     echo "刪除資料錯誤: " . $conn->error;
// }

$sql="UPDATE users SET valid=0 WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "刪除資料完成";
} else {
    echo "刪除資料錯誤: " . $conn->error;
}

header('location: user-list.php');



?>