<?php
require_once("../PDO_connect.php");
$account=$_POST["account"];
$password=md5($_POST["password"]);
// $account="adam";
// $password=md5(12345);
$sql="SELECT id, account, name, email, phone FROM users WHERE account = ? AND password= ?";
$stmt=$db_host->prepare($sql);
$stmt->execute([$account, $password]);
try{
    $count=$stmt->rowCount();
    if($count>0){
        $data=array(
            "status"=>1,
            "msg"=>"登入成功"
        );
        $row=$stmt->fetch();
        $user=array(
            "id"=>$row["id"],
            "account"=>$row["account"],
            "name"=>$row["name"],
            "email"=>$row["email"],
            "phone"=>$row["phone"]
        );
        $_SESSION["user"]=$user;
    }else{
        $data=array(
            "status"=>2,
            "msg"=>"登入失敗"
        );
    }
    
    echo json_encode($data);

}catch(PDOException $e){
    // echo "資料庫連結失敗<br>";
    // echo "Eroor: ".$e->getMessage(). "<br>";
    $data=array(
        "staus"=>0,
        "message"=> $$e->getMessage()
    );
    echo json_encode($data);
    exit;
}


?>