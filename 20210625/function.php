<?php
function myFunc_1(){
    echo "my func 1<br>";
}
function myFunc_2(){
    echo "my func 2<br>";
}

$template="myFunc_";
$fun_arr=[1,2];
// foreach($fun_arr as $func){
//     $calling=$template.$func;
//     $calling();
// }

//遞迴函式
function recursion($a){
    if($a<5){
        echo "$a<br>";
        recursion($a+1);
    }
}
// recursion(0);

//匿名函式
$myFunc_1=function($str){
    echo $str;
};
// $myFunc_1("Hello World!");

//call back
function math($operation, $m, $n){
    return $operation($m, $n);
}

function add($m, $n){
    return $m+$n;
}
function sub($m, $n){
    return $m-$n;
}

echo "add(7, 4) is: ".math("add", 7, 4);  //add(7, 4) is: 11
echo "<br>";
echo "sub(7, 4) is: ".math("sub", 7, 4);  //sub(7, 4) is:3



?>