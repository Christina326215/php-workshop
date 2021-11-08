<?php
    require_once "../db_connect.php";
    $sql="SELECT users.name AS user_name, user_like.*, COUNT(user_like.user_id) AS user_count
    FROM user_like
    JOIN users ON user_like.user_id = users.id
    GROUP BY user_like.user_id";

    if ($conn->query($sql) == TRUE) {
        // echo "查詢資料完成";
    } else {
        // echo "查詢資料錯誤: " . $conn->error;
    }

    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo $row["user_name"].":".$row["user_count"]."<br>";
    }

?>