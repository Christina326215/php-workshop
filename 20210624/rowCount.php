<?php
require_once("../PDO_connect.php");

$stmt = $db_host->prepare("SELECT * FROM users");
$stmt->execute();
echo $stmt->rowCount();  //使用rowCount可以知道共有多少筆資料。

?>