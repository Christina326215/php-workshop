<?php
require_once "../db_connect.php";
$max = $_GET["max"];
$min = $_GET["min"];
if (empty($min)) {
    $min = 0;
}
if (empty($max)) {
    $max = 999999;
}

// $sql="SELECT * FROM product WHERE price>=$min AND price<=$max ORDER BY price DESC";
//不推薦使用JOIN(效能很差)，可使用第二層query，或是關聯式資料庫的觀念把資料撈出來。cache是前端暫存，而後端暫存需要透過變數進資料庫撈資料。


$sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category = category.id WHERE product.price>=$min AND product.price<=$max ORDER BY product.price DESC";
$result = $conn->query($sql);

$sqlCategory = "SELECT * FROM category";
$resultCategory = $conn->query($sqlCategory);
$category = array();  //新建陣列來存取資料表category內容。
while ($rowCategory = $resultCategory->fetch_assoc()) {
    $category[$rowCategory["id"]] = $rowCategory["name"];
    //先將category資料表的資料存成關聯式陣列。
    //再用while迴圈把關聯式陣列內容給跑出來。
    //建立(新的)空陣列$category的key值是關聯式陣列$rowCategory的id(category資料表的欄位id)，對應到的value值是$rowCategory的name(category資料表的欄位name)。
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <aside class="col-lg-2">
                <?php require("aside.php"); ?>
            </aside>
            <div class="col-lg-10">
                <div class="row">
                    <?php require("products.php") ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>