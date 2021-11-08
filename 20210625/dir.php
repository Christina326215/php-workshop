<?php
$path='C:\xampp\htdocs\20210625';
$handle=opendir($path);

while($file=readdir($handle)){
    echo $file."<br>";
}

closedir($handle);
?>