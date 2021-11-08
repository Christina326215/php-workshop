<?php
require_once("session.php");
unset($_SESSION["America"]); //刪除一筆(某一個key)

session_destroy(); //刪除全部 
?>