<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var</title>
</head>
<body>
    <?php
    // $var1;
    // var_dump($var1);

    // $var2=3;
    // var_dump($var2);

    // $myName="John";
    // echo "<br>";
    // echo $myName;

    $a=99;  //全域變數
    function show(){
        $b=10;  //區域變數
        static $c=1;  
        // echo $a."<br>"; //在一個區域裏面無法直接取用全域變數
        echo "a: ".$GLOBALS["a"]."<br>"; //php 取用全域變數的方法
        echo "b: ".$b."<br>";
        echo "c: ".$c."<br>";
        echo "----"."<br>";
        $GLOBALS["a"]=$GLOBALS["a"]+1;  //可以存取上一次的狀態。
        $b=$b+1;  //無法存取上一次的狀態。
        $c=$c+1; //靜態變數，可以像全域變數一樣存取上一次的狀態。
    }

    // echo $a."<br>";
    // show();
    // show();
    // echo $b;

    // $i=true;
    // var_dump($i);

    // $i=0b1011;
    // echo $i."<br>";
    // $j=072;
    // echo $j."<br>";
    // $k=0xff;
    // echo $k;

    // $i=1.289;
    // echo $i."<br>";
    // $j=1.289E7;
    // echo $j."<br>";
    // $k=1.289e-3;
    // echo $k;

    $x=null;
    var_dump($x);
    echo "hi";

    ?>
</body>
</html>