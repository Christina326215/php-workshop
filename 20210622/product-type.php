<?php
require_once "../db_connect.php";
$type = $_GET["type"];

$sql = "SELECT * FROM product WHERE category='$type' ORDER BY name DESC";
$result = $conn->query($sql);

$sqlCategory = "SELECT * FROM category";
$resultCategory = $conn->query($sqlCategory);
$category = array();
while ($rowCategory = $resultCategory->fetch_assoc()) {
    $category[$rowCategory["id"]] = $rowCategory["name"];
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