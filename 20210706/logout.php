<?php
session_start();
session_destroy();
header("location: product-list.php");

?>