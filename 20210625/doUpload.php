<?php
if($_FILES["file"]["error"]==0){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], "./". $_FILES["file"]["name"])){
        echo "Upload success!<br>";
    }else{
        echo "Upload fail!!<br>";
    }

}

print_r($_FILES);

?> 