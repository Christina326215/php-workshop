<?php
// echo time();

// echo date_default_timezone_get();

// ini_set("date.timezone","Asia/taipei");
date_default_timezone_set("Asia/taipei");
// echo date("H:i:s");

$timestamp= strtotime("2021-06-26");
echo date("Y/m/d",$timestamp)."(".date('D',$timestamp).")";

?>