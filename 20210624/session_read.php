<?php
require_once("session.php");

if(isset($_SESSION["America"])){
    echo $_SESSION["America"];
}

echo "<br>";
if(isset($_SESSION["Taiwan"])){
    echo $_SESSION["Taiwan"];
}
?>