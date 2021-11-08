<?php
function divide($a, $b){
    if($b==0){
        exit("divided by 0 error");
    }else{
        $c=$a/$b;
        echo "a / b = $c";
        echo "<br>";
    }
}

// divide(6,4);
// divide(6,0);

for($i=0; $i<5; $i++){
    echo date("H:i:s");
    echo "<br>";
    sleep(2);
}


?>