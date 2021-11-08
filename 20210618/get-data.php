<?php  
    //檢查是否帶入資料
    if(isset($_GET["fruit"])){
        $fruit=$_GET["fruit"];
    }else{
        echo "沒有帶資料";
        exit;
    }
    
    // $test="";
    // var_dump(empty($test));
    if(empty($fruit)){
        echo "請輸入水果名稱";
    }else{
        echo $fruit;
    }

?>