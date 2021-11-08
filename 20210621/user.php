<?php
require_once "../db_connect.php";

//新增資料用POST，顯示資料用GET。 
$id=$_GET["id"];
$sql="SELECT * FROM users WHERE id='$id'";  //選擇users資料表中，符合id條件的所有資料。
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  
</head>
<body>
<div class="container">
    <div class="row">
        <aside class="col-lg-2">
        <div class="list-group list-group-flush">
            <a href="user-list.php" class="list-group-item list-group-item-action">
                使用者列表
            </a>
        </div>
        </aside>
        <div class="col-lg-10">
        <form action="updateUser.php" method="post">
            <?php  if ($result->num_rows > 0):
                    while($row = $result->fetch_assoc()) {
            ?>
                <input type="hidden" name="id" value="<?=$row["id"]?>">
            <div class="mb-2">
                <label>帳號:</label>
                <input type="text" class="form-control-plaintext" name="account" value="<?=$row["account"]?>" readonly>
            </div>
            <div class="mb-2">
                <label>姓名:</label>
                <!-- <span><?=$row["name"]?></span> -->
                <input type="text" class="form-control" name="name" value="<?=$row["name"]?>">
            </div>
            <div class="mb-2">
                <label>email:</label>
                <!-- <span><?=$row["email"]?></span> -->
                <input type="text" class="form-control" name="email" value="<?=$row["email"]?>">
            </div>
            <div class="mb-2">
                <label>電話:</label>
                <!-- <span><?=$row["phone"]?></span> -->
                <input type="text" class="form-control" name="phone" value="<?=$row["phone"]?>">
            </div>
            <div class="mb-2">
                <label>註冊時間:</label>
                <span><?=$row["create_time"]?></span>
            </div>
            <button class="btn btn-info" type="submit">更新</button>
     <?php
        }
        endif; ?>
    </form>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>