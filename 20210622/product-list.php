<?php
//在網址的地方加入?p=第幾頁
if (!isset($_GET["p"])) {
    $p = 1;
} else {
    $p = $_GET["p"];
}

$per_page = 6;   //每一頁要有幾筆
$start_item = ($p - 1) * $per_page;   //$start_item代表從第幾筆開始

require_once "../db_connect.php";
// $sql="SELECT * FROM product ORDER BY name ASC LIMIT $start_item, $per_page";

$sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category = category.id 
     ORDER BY product.name ASC LIMIT $start_item, $per_page";
$result = $conn->query($sql);  //只抓單頁的資料
//首先，SELECT資料表product的全部資料，並且將資料表category的name更改名稱AS為category_name(因為兩資料表的name有重複)，FROM資料表product，接著，JOIN資料表category，ON在資料表product的category等於category的id條件下。


$sqlTotal = "SELECT * FROM product";
$resultTotal = $conn->query($sqlTotal);  //抓所有頁數的資料
$total = $resultTotal->num_rows;   //共有幾筆
$pages = CEIL($total / $per_page);  //共有幾頁
// 1/6 -> 0.16666
// 2/6 -> 0.3333
// 6/6 -> 1
// 7/6 -> 1.16666

$sqlCategory = "SELECT * FROM category";
$resultCategory = $conn->query($sqlCategory);
$category = array();
while ($rowCategory = $resultCategory->fetch_assoc()) {  //把資料存取成關聯式陣列。
    $category[$rowCategory["id"]] = $rowCategory["name"];
}
// $category=array(
//     "1"=>"men",
//     "2"=>"women"
// );


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
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pages; $i++) { ?>
                            <li class="page-item <?php if ($i == $p) echo "active"; ?>">
                                <a class="page-link" href="product-list.php?p=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>