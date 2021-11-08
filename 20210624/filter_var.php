<?php
$email="man@test.com";
$email2="222";

if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo "email is valid.";
}else{
    echo "email is not vaild.";
}


?>