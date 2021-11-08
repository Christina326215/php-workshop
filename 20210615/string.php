<?php
// $foo='This is a string.';
// $foo2='Example of string';
// echo $foo."<br>";
// echo 'foo is $foo'."<br>";  //在單引號裡面放變數，就會整個都變成字串。
// echo "foo is $foo<br>";     //在雙引號裡面放變數，可以產生變數定義的字串。
// echo 'foo is '.$foo;

// echo 'John said: "Hello!"<br>';

// $foo=1+"2";   //php裡面的加號是用來做四則運算，而點就是用來連接。
// echo $foo."<br>";
// $foo=1+"11.5";
// echo $foo."<br>";

echo 'the path is c:\newpath<br>';
echo 'the path is c:\\newpath<br>';  //在單引號裡面用一個或兩個斜線，都會只產生一個斜線，沒有差異。
echo "the path is c:\newpath<br>";   //在雙引號裡面用\n一個斜線，會變成空格(在雙引號裡面\n代表空格)。
echo "the path is c:\\newpath<br>";  //在雙引號裡面用\\n兩個斜線，會變成\n，同單引號的結果。
echo 'I said \'go home\'';


?>
