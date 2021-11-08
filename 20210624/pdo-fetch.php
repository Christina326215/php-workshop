<h2>fetch</h2>
<?php
require_once("../PDO_connect.php");

$stmt=$db_host->prepare("SELECT * FROM users");

try{
    $stmt->execute();
    while($row=$stmt->fetch()){
        echo "<a href='user.php?id=".$row["id"]."'>".$row["id"].": ".$row["name"]."</a>";
        echo "<br>";
    }

}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

?>
<h2>fetchALL PDO::FETCH_ASSOC</h2>  
<?php

$stmt=$db_host->prepare("SELECT * FROM users");

try{
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);  //用關聯式陣列key對value的方式把資料撈出來
    foreach($rows as $row){
        // var_dump($row);
        echo "<a href='user.php?id=".$row["id"]."'>".$row["id"].": ".$row["name"]."</a>";
        echo "<br>";
    }


}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

?>
<h2>fetchALL PDO::FETCH_NUM</h2>
<?php

$stmt=$db_host->prepare("SELECT * FROM users");

try{
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_NUM);
    foreach($rows as $row){
        var_dump($row);
        // echo "<a href='user.php?id=".$row[0]."'>".$row[1].": ".$row[2]."</a>";
        echo "<br>";
    }


}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

?>
<h2>fetchALL PDO::FETCH_BOTH</h2>
<?php

$stmt=$db_host->prepare("SELECT * FROM users");

try{
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach($rows as $row){
        var_dump($row);
        // echo "<a href='user.php?id=".$row[0]."'>".$row[1].": ".$row[2]."</a>";
        echo "<br>";
    }


}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

?>