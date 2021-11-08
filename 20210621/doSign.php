<?php
require_once "../db_connect.php";

$account=$_POST["account"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

if($password!==$repassword){
    echo "兩次密碼輸入不一致";
    exit();
}
$checkSql="SELECT * FROM users WHERE account='$account'";
$checkResult = $conn->query($checkSql);

if($checkResult->num_rows>0){  //檢查帳號是否已有人註冊
    echo "此帳號已註冊";
    exit();
}

$password=md5($password);
$now=date('Y-m-d H:i:s');
$sql="INSERT INTO users (account, password, create_time) 
    VALUES ('$account', '$password', '$now')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
    $last_id = $conn->insert_id;
    echo "最新一筆為序號".$last_id;
    
} else {
    echo "新增資料錯誤: " . $conn->error;
}

$conn->close();

?>