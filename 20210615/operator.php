<?php
$a=3;
$b=2;
echo -$a."<br>";
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";
echo 5%3;
echo "<br>";
echo $a**$b;
echo "<br>";
?>
--<br>
<?php
$i=5;
$i+=3;
echo $i."<br>";
$i*=3;
echo $i."<br>";

$str="Hello, ";
echo $str.="world<br>";  //使用點等於來連結兩個字串。

$x=5;
$y=6;
echo "x is: ". $x--;
echo "<br>";
echo "x is: $x";
echo "<br>";

echo "y is: ".++$y;
echo "<br>";
echo "y is: $y";

?>