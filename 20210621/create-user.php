<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
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
                <form action="userCreate.php" method="post">
                    <div class="mb-2">
                        <label for="account">帳號</label>
                        <input class="form-control" type="text" id="account" name="account">
                    </div>
                    <div class="mb-2">
                        <label for="name">姓名</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="email">email</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="phone">電話</label>
                        <div class="row">
                            <div class="col">
                            <input class="form-control" type="tel" id="phone" name="phone[]">
                            </div>
                            <div class="col">
                            <input class="form-control" type="tel" id="phone" name="phone[]">
                            </div>
                            <div class="col">
                            <input class="form-control" type="tel" id="phone" name="phone[]">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">新增</button>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>