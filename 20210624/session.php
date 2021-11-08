<?php
session_start();
//session是把資料存在伺服器(以關聯式陣列儲存)。
//session一般用在使用者登入之後的動作，在登出之前都可以使用此權限，可減少資料庫的query負擔。若要在很多頁面都使用，就可存在session裏面。例如：登入資料、購物車。session和cookie都是key對value的方式。
?>