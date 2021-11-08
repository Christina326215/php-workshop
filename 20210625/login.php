<?php
require_once("../pdo_connect.php");
if(isset($_SESSION["user"])){
    header("location: dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
            <?php if(isset($_SESSION["error"]) && $_SESSION["error"]["times"]>5): ?>
                <h1 class="text-center">登入</h1>
                <div class="text-danger">您嘗試的登入錯誤次數過多, 請稍後再來</div>
            <?php else: ?>
            <form id="form" action="doLogin.php" method="post">
                <h1 class="text-center">登入</h1>
                <div class="mb-2">
                    <label for="">帳號</label>
                    <input type="text" name="account" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">密碼</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <?php if(isset($_SESSION["error"])): ?>
                <div class="mb-2">
                    <small class="text-danger"><?php echo $_SESSION["error"]["message"] ?>, 登入錯誤次數 <?php echo $_SESSION["error"]["times"] ?></small>
                </div>
                <?php endif; ?>
                <button id="sign" class="btn btn-info" type="submit">送出</button>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>