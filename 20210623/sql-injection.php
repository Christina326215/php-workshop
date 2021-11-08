<?php 
$userName = "1' OR '1'='1";
$passWord = "1' OR '1'='1";

$sql="SELECT * FROM users WHERE (name = '" . $userName . "') and (pw = '" . $passWord . "');";

echo $sql;
?>