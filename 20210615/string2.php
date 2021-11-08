<?php
$welcome="Hello World!";
echo strlen("Hello world!")."<br>";  //字串長度
echo str_word_count("Hello world!")."<br>";  //字數個數

$name="Samantha";
echo substr($name, 1)."<br>"; //把第一個字母切除，剩下的留下來。 //amantha
echo substr($name, -2)."<br>";  //擷取最後兩個字母。           //ha
echo substr($name, 3, 1)."<br>";  //在index=3的位置擷取一個字母。   //a

$email="john@test.com";
echo strstr($email, "@")."<br>";  //顯示(含)第一次出現@以後的字串。
echo strstr($email, "@", true)."<br>";  //預設為false，而true表示(不含@)前面的字串。

echo strpos($welcome, "world")."<br>"; //區分大小寫
echo stripos($welcome, "world")."<br>"; //不區分大小寫
if( strpos($welcome, "wowrld")==false){
    echo "not found<br>";
}

$string="Hello John, how are you.";
$stringArr=explode(" ", $string);  //依字串分割字串並轉換為陣列
// var_dump($stringArr);
// echo "<br>";
// print_r($stringArr);
for($i=0; $i<count($stringArr); $i++){
    echo $stringArr[$i]."<br>";
}


echo str_replace("World!", "Kitty", $welcome);


?>