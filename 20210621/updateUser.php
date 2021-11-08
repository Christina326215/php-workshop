<?php
require_once "../db_connect.php";

$id=$_POST["id"];
$phone=$_POST["phone"];
$name=$_POST["name"];
$email=$_POST["email"];


$sql="UPDATE users SET phone='$phone', name='$name', email='$email' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "修改資料完成";
    
} else {
    echo "修改資料錯誤: " . $conn->error;
}

// header('location: user-list.php');
header('location: user.php?id='.$id);


?> 