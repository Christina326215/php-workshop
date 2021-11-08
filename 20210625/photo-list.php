<?php
require_once("../pdo_connect.php");
$sql="SELECT * FROM product_photos ORDER BY id DESC";
$stmt=$db_host->prepare($sql);

try{
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo "資料查詢連結失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  
</head>
<body>
<div class="container">
    <form action="uploadPhoto.php" method="post" enctype="multipart/form-data">
        <div class="mb-2">
            <label for="">選擇檔案</label>
            <input type="file" name="file"><button class="btn btn-info">送出</button>
        </div>
    </form>
    <div class="row">
        <?php foreach($rows as $value){ ?>
            <div class="col-md-3">
                <img class="img-fluid" src="upload/<?=$value["img_name"]?>" alt="">
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>