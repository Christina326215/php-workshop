<h2>break</h2>
<?php
    // $a=0;
    // while($a<10){
    //     $a++;
    //     echo "$a / ";
    // }

    // $a=0;
    // do{
    //     $a++;
    //     echo "$a / ";
    // }while($a<10);

    // for($i=0; $i<10; $i++){
    //     echo "$i / ";
    // }

    // for($i=2, $j=2; $i<10; $i++, $j++){
    //     echo "$i * $j = ".$i*$j."<br>";
    // }


    $userArr=array("Tom", "John", "May", "Robbert");
    $userArr=["Tom", "John", "May", "Robbert", "Sarah", "Clark", "Tony"];

    for($i=0; $i<count($userArr); $i++){
        // echo "$i /";
        if($i>5)break;
        if($userArr[$i]=="May"){
            echo "Got May!!";
            break;
        }
        echo $userArr[$i]."<br>";
    }

?>
<h2>continue</h2>
<?php 
    // for($i=0; $i<=10; $i++){
    //     if($i==4)continue;

    //     if($i%2==0){
    //         echo "$i<br>";
    //     }else{
    //         continue;
    //     }
    // }

    $userArr=array("Tom", "John", "May", "Robbert");
    $userArr=["Tom", "John", "May", "Robbert", "Sarah", "Clark", "Tony"];

    for($i=0; $i<count($userArr); $i++){
        // echo "$i /";
        if($i>5)break;
        if($userArr[$i]=="May"){
            echo "Got May!!<br>";
            continue;
        }
        echo $userArr[$i]."<br>";
        
    }

?>
<h2>goto</h2>
<?php 

for($i=0; $i<5; $i++){
    echo "$i<br>";
    // if($i==3)goto end;   //3還是會出現，再跑到ending，不產生"show me the money!"。
    // if($i==3)break;
    if($i==3)continue;
    
}
echo "show me the money!<br>";
end:{
    echo "ending";
}

?>