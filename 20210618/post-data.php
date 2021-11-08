<?php
    if(isset($_POST["fruit"])){
        $fruit=$_POST["fruit"];
    }else{
        echo "沒有帶資料";
        exit;
    }
    
    // $test="";
    // var_dump(empty($test));
    if(empty($fruit)){
        echo "請輸入水果名稱";
    }else{
        echo $fruit."<br>";
    }
    if(empty($_POST["address"])){
        echo "請輸入地址";
    }else{
        echo $_POST["address"]."<br>";
    }
    $phones=$_POST["phones"];
    // var_dump($phones);
    foreach($phones as $value){
        if($value==""){
            continue;
        }
        echo $value."<br>";
    }

    echo $_POST["telecom"];

    echo $_POST["gender"];


?>