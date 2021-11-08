<?php
function myEcho(){
    echo "123";
    echo "<br>";
}
// myEcho();
// myEcho();

function sayHello($name="Tom"){
    echo "Hello, $name";
    echo "<br>";
}
// sayHello("John");
// sayHello();

function add2(&$x, $y){  //在$x前面加上&代表傳址(會改變值，會影響全域變數的內容)，$y則維持傳值(不會改變值，不會影響全域變數的內容)。
    $x +=$y;
    //$x =$x+$y;
    $y++;
}

$a=10;
$b=2;
add2($a, $b);

// echo "Now a is: $a and b is $b!";

// $a=0;
// $b=$a; //call by value

// $a=0, $b=3;

function sum(){
    $i= func_num_args();  //可以知道有多少個參數
    echo "Have $i arguments.<br>";
    $result=0;
    $input=func_get_args();
    foreach($input as $n){
        $result+=$n;
    }
    return $result;
}

echo sum(3, 2, 5);   //得知有三個參數，且相加為10。

$note = "global note";
function notify(){
    $note="local note";
    $global_note=$GLOBALS["note"];

    echo $note."<br>";
    echo $global_note."<br>";

}
// notify();

function static_example(){
    $a=0;
    static $b=0;
    echo "a is $a and b is ".$b++;
    echo "<br>";
}
// static_example();
// static_example();
// static_example();

function sum2($a, $b){
    function myHello(){
        echo "Hello here!<br>";
    }
    myHello();
    echo $a+$b;
}
$a=2; $b=3;
sum2($a, $b);
myHello();


?>