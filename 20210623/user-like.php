<?php
    require_once "../db_connect.php";
    $sql="SELECT product.name AS product_name, user_like.*, COUNT(user_like.product_id) AS product_count
    FROM user_like
    JOIN product ON user_like.product_id = product.id
    GROUP BY user_like.product_id";  //將user_like.product_id群組化，把合併的幾筆加總起來。這裡表示某一個產品id出現了幾次。

    if ($conn->query($sql) == TRUE) {
        // echo "查詢資料完成";
    } else {
        // echo "查詢資料錯誤: " . $conn->error;
    }

    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo $row["product_name"].":".$row["product_count"]."<br>";
    }

?>