<?php
require_once("../PDO_connect.php");

if(!isset($_POST["account"])){
    echo "請循正常管道進入";
    header("location: login.php");
    exit();
}
$account=$_POST["account"];
$password=md5($_POST["password"]);

$stmt=$db_host->prepare("SELECT * FROM users WHERE valid=1 AND account = ? AND password=?");
try{
    $stmt->execute([$account, $password]);
    $loginStatus=$stmt->rowCount();
    if($loginStatus===0){
        if(isset($_SESSION["error"])){
            $times=$_SESSION["error"]["times"]+1;
        }else{
            $times=1;
        }
        $dataError=array(
            "message"=>"您的帳號或密碼錯誤",
            "times"=>$times
        );
        $_SESSION["error"]=$dataError;
        header("location: login.php");
    }else{
        while($row=$stmt->fetch()){
            $dataUser=array(
                "name"=>$row["name"],
                "account"=>$row["account"],
                "email"=>$row["email"],
                "phone"=>$row["phone"]
            );
            unset($_SESSION["error"]);
            $_SESSION["user"]=$dataUser;
            header("location: dashboard.php");
    
        }
    }

    

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}



?>