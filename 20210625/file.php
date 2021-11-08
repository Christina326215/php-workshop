<?php
// if(file_exists("test.html")){
//     unlink("test.html"); //刪除檔案
// }

if(file_exists("l_server.php")){
    copy("l_server.php", "l_server_newnew.php"); //複製檔案
}

?>