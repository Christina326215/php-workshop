<?php

$var=1;

// try{
//     $var->method();
// }catch(Error $e){
//     var_dump($e);
    // echo "Got an error here!";
// }

// try{
//     $d=0;
//     $result=90 % 0;
// } catch (DivisionByZeroError $e){
//     echo $e->getMessage();
// }

// function add(int $a, int $b){
//     return $a+$b;
// }

// try{
//     $result=add("one_cat", "two_cat");
// }catch (TypeError $e){
//     echo $e->getMessage();
// }


// try{
//     $d=0;
//     $result=90 % 0;
// }catch (DivisionByZeroError $e){
//     echo "catch in DivisionByZeroError<br>";
//     echo $e->getMessage();
//     echo "<br>";
// }catch(ArithmeticError $e){
//     echo "catch in ArithmeticError<br>";
//     echo $e->getMessage();
//     echo "<br>";
// }finally{
//     echo "Finally program block";
// }

$score=-3;
try{
    if($score<0){
        throw new Exception("Exception: score shoudn't be negative.", 1002);
    }
}catch (Exception $e){
    echo $e->getMessage()."<br>"; //錯誤訊息
    echo $e->getCode(); //錯誤代碼
}

?>