<?php
require_once "../db_connect.php";
$sqlMax="SELECT * FROM product WHERE price=(SELECT MAX(price) FROM product)";
if ($conn->query($sqlMax) == TRUE) {
    // echo "查詢資料完成";
} else {
    // echo "查詢資料錯誤: " . $conn->error;
}
$resultMax = $conn->query($sqlMax);
    while($row = $resultMax->fetch_assoc()) {
        echo $row["name"].":".$row["price"]."<br>";
    }


    $sqlMin="SELECT * FROM product WHERE price=(SELECT MIN(price) FROM product)";
if ($conn->query($sqlMin) == TRUE) {
    // echo "查詢資料完成";
} else {
    // echo "查詢資料錯誤: " . $conn->error;
}
$resultMin = $conn->query($sqlMin);
    while($row = $resultMin->fetch_assoc()) {
        echo $row["name"].":".$row["price"]."<br>";
    }

?>