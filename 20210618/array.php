<?php 
$arr=array(1,2,3,4);
// echo array_sum($arr);

$input=array(
    "a"=>"John",
    "Sam",
    "b"=>"John",
    "Mary",
    "Sam"
);
$result=array_unique($input);
// print_r($result);

$arr=array(
    "John"=>1,
    1=>28,
    "Sam"=>4
);
// print_r(array_change_key_case($arr, CASE_LOWER));

$input=array(1,2,3);
$result=array_pad($input, 7, 10);
// print_r($result);

$cars=array("Toyota", "BMW", "Tesla", "BMW");
// echo var_dump(in_array("BMW", $cars));
// var_dump(array_search("BMW2", $cars));

$students=array(
    "John"=>array(
        "age"=>18,
    ),
    "May"=>array(
        "age"=>19,
    )
);
// var_dump(array_key_exists("May", $students));

$cars=array(
    "Toyota"=>"Altis",
    "BMW"=>"530i",
    "Tesla"=>"Model S"
);
asort($cars);
print_r($cars);
echo "<br>";
rsort($cars);
print_r($cars);


?>