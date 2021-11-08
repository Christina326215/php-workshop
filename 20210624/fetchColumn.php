<?php
require_once("../PDO_connect.php");
$sth = $db_host->prepare("SELECT name, email FROM users WHERE id=1");
$sth->execute();
$row = $sth->fetchColumn(1); //只取得一個欄位的資料 Tom 
echo $row."<br>";


?>