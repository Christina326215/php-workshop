<?php 
define("BASKETBALL_GOD", "Michael Jordan");
echo BASKETBALL_GOD."<br>";  //常數不允許使用$開頭。

const MAX_VALUE=250;   //常數在定義變數時全使用大寫字母。
echo MAX_VALUE."<br>";


echo __LINE__."<br>"; //正在第幾行
echo __FILE__."<br>"; //含檔名的路徑
echo __DIR__."<br>";  //資料夾路徑
function call(){
    echo __FUNCTION__."<br>"; //顯示函式名稱
}
call();
?>