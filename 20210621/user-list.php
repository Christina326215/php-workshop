<?php
require_once "../db_connect.php";
// $sql="SELECT * FROM users";
$sql="SELECT id, name, account, email, phone FROM users";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
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
            <div class="d-flex justify-content-between py-2">
                <div class="">共有 <?=$result->num_rows?> 位使用者</div>
                <div class="">
                    <form action="user-search.php" method="get" class="d-flex">
                        <input type="text" class="form-control" name="search">
                        <button class="btn btn-info text-nowrap">搜尋</button>
                    </form>
                </div>
            </div>
            <div class="pb-2 d-flex justify-content-end">
                <a class="btn btn-info" href="create-user.php">新增使用者</a>
            </div>
        <?php
            // if ($result->num_rows > 0) {
                // output data of each row
              //fetch_assoc() 將讀出的資料Key值設定為該欄位的欄位名稱。
            //     while($row = $result->fetch_assoc()) {
            //       echo "id: " . $row["id"]. " : 姓名: " . $row["name"]. ", 電話: " . $row["phone"]. ", email: ".$row["email"]."<br>";
            //     }
            //   } else {
            //   echo "目前沒有使用者";
            //   }
              

        ?>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>序號</th>
                    <th>帳號</th>
                    <th>姓名</th>
                    <th>eamil</th>
                    <th>電話</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  if ($result->num_rows > 0):
                    while($row = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?=$row["account"]?></td>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["phone"]?></td>
                    <td><a class="btn btn-info" href="user.php?id=<?=$row["id"]?>">瀏覽</a></td>
                </tr>
                <?php
                }
                else: ?>


                <?php endif; ?>
            </tbody>
        </table>
            </div>
        </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>