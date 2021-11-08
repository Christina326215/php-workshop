<?php
$key="name";
$value="Mary";
setcookie($key, $value, time()+ 3600);  //cookie使用key對value的方式存取，資料存在瀏覽器，發出去和伺服器溝通並回傳，不會存到資料庫裡。
//另外補充，web sorage適用javascript寫的，僅儲存在瀏覽器中，不會跟伺服器溝通。
echo $_COOKIE["name"]."<br>"; 



$key="email";
$value="joe@text.com";
setcookie($key, $value, time()+ 3600);
if(isset($_COOKIE["email"])){
    echo $_COOKIE["email"];
}


?>