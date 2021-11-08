<?php
require_once "../db_connect.php";
$account=$_POST["account"];
$password=md5($_POST["password"]);


$sql="SELECT * FROM users WHERE account='$account' AND password='$password'";
// echo $sql;

$result = $conn->query($sql);

if($result->num_rows===1){
    echo "登入成功";
}else{
    echo "登入失敗";
}

?>