<?php
// $input="Sam loves his mother";
// $pattern="/(fa|mo)ther/";

// if(preg_match($pattern, $input)){
//     echo "mathced";
// }else{
//     echo "not mathced";
// }

$mail="myName@mycompany.com.tw";
$pattern="/\.|@/";
$output=preg_split($pattern,$mail);
print_r($output);
?>