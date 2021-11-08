<?php
require_once "../db_connect.php";
if(isset($_POST["account"])){
    $account=$_POST["account"];
}else{
    echo "沒有帶資料";
    exit;
}


$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$now=date('Y-m-d H:i:s');

$phone=array_filter($phone); //過濾空值

$phoneStr=implode(",", $phone);
// echo $phoneStr;

// var_dump($phone);
// $phoneArr=array();
// foreach($phone as $value){
//     if($value!="" || $value=null){
//         array_push($phoneArr, $value);
//     }
// }
// var_dump($phoneArr);


// exit();

$sql="INSERT INTO users (name, account, email, phone, create_time) 
    VALUES ('$name', '$account', '$email', '$phoneStr', '$now')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料完成";
    $last_id = $conn->insert_id;
    echo "最新一筆為序號".$last_id;
    
} else {
    echo "新增資料錯誤: " . $conn->error;
}

foreach($phone as $value){
$sqlPhone="INSERT INTO phone (phone, user_id) 
    VALUES ( ' $value', '$last_id')";
if ($conn->query($sqlPhone) === TRUE) {
    echo "新增資料完成";
    // $last_id = $conn->insert_id;
    // echo "最新一筆為序號".$last_id;
    
} else {
    echo "新增資料錯誤: " . $conn->error;
}

}


$conn->close();

header('location: user-list.php');



?>