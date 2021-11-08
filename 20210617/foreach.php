<?php
// $arr=[1,2,3,4];
// foreach($arr as $value){
//     echo "$value<br>";
// }

// $arr=["BMW", "Toyota", "Tesla"];
// foreach($arr as $key => $value){
//     echo "Index: $key is $value<br>";
// }

// $user=array(
//     "John"=>"sales",
//     "Sam"=>"manager",
//     "Mary"=>"secretary"
// );

// foreach($user as $name=>$job){
//     echo "$name is a $job<br>";
// }

// $cars=array(
//     "Tesla"=>array(
//         "type"=>"Model S",
//         "price"=>335
//     ),
//     "Toyota"=>array(
//         "type"=>"Altis",
//         "price"=>70
//     )
// );

// foreach($cars as $car=>$value){
//     echo $car." ".$value["type"].", price is ".$value["price"];
//     echo "<br>";
// }

// $user=array(
//     array(
//         "name"=>"May",
//         "email"=>"may@test.com"
//     )
//     ); 

$a=array(
    "John"=>"sales",
    "May"=>"manager",
    "Tom"=>"doctor"
);
foreach($a as $name=>$title){
    echo "\$a[$name] => $title.\n";
}

$arr=array(1,2,3,4);
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."\t";
}

$len=count($arr);
$i=0;
while($i<$len){
    echo $arr[$i]."\t";
    $i++;
};

?>