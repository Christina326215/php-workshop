<?php
$arr=array("John", 28, "sales");
// echo (is_array($arr)) ? "true":"false";

list($name, $age, $job)=$arr;
// echo "$name is $age years old and he is a $job.";

$r=range(2,12,2);
// print_r($r);
// foreach($r as $value){
//     echo $value."<br>";
// }


// print_r(array_values($arr));

$users=["John", "John", "Sam", "Sarah"];
// print_r(array_count_values($users));

$arr=array('one','two','three','four');
// echo current($arr);
next($arr);
next($arr);
// echo current($arr);
reset($arr);
// echo current($arr);
do{
    echo current($arr)."\t";
}while(next($arr));

$arr1=array("name"=>"John", 2, 3);
$arr2=array("a", "b", "name"=>"sam", "age"=> 18, 4);
$result=array_merge($arr1, $arr2);
// print_r($result);
$result2=array_merge_recursive($arr1, $arr2);
// print_r($result2);

//compact
// $var1="green";
// $var2="red";
// $var3="black";
// $myArray=compact("var1", "var2", "var3");
// print_r($myArray);

$users=["John", "Sam", "May"];
$meta=array(
    "author"=>"Tom",
    "description"=>"This is description"
);
$data=compact("users", "meta");
// print_r($data); M-資料庫 V-頁面 C-
// print_r($data["users"]);

//array_chunk
$arr=['a','b','c','d','e'];
$result=array_chunk($arr, 3);
// print_r($result);

//array_combine
$a=["John", "Sam"];
$b=[28,32];
$c=array_combine($a, $b);
// print_r($c);

//array change
$arr=['a','b','c'];
array_shift($arr);
// print_r($arr);
array_unshift($arr, 'A');
// print_r($arr);

array_pop($arr);
// print_r($arr);
array_push($arr, "C", "D");
// print_r($arr);
// echo "<br>";
// var_dump($arr);

$input=['a','b','c','d','e'];
// $output=array_slice($input, 0, 4);
// print_r($output);

// array_splice($input, 1, 2, 'john');
// print_r($input);

$result=array_rand($input, 2);
print_r($result);

$input=array("Tesla","BMW","Toyota");
$result=array_flip($input);
print_r($result);

$a=array("a","b","c","d");
$b=array("a","c","x","y");
// print_r(array_diff($a,$b));
// print_r(array_diff_assoc($a,$b));
// print_r(array_intersect($a,$b));
// print_r(array_intersect_assoc($a,$b));

$arr=array(1,2,3);
// echo array_sum($arr);

$input=array(
    "a"=>"John","Sam",
    "b"=>"John","Mary","Sam"
);
// print_r($result=array_unique($input));

$arr=array(
    "John"=>1,
    1=>28,
    "Sam"=>4
);
// print_r(array_change_key_case($arr,CASE_UPPER));

$input=array(1,2,3);
$result=array_pad($input,5,10);
print_r($result);

$cars=array("BMW","Tesla","Toyota","BMW");
// echo var_dump(in_array("BMW",$cars));
// echo array_search("BMW",$cars);

$student=array(
    "John"=>101,
    "Sam"=>102
);
var_dump(array_key_exists("Sam",$student));

$cars=array(
    "Toyota"=>"Altis",
    "BMW"=>"530i",
    "Tesla"=>"Model S"
);
asort($cars);
// print_r($cars);
rsort($cars);
// print_r($cars);

$array1=$array2=array("id_22","id_10","id_2","id_1");
asort($array1);
// print_r($array1);
natsort($array2);
print_r($array2);

?>