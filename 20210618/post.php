<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="post-data.php" method="post">
            <div class="mb-2">
                <label for="">水果</label>
                <input type="text" class="form-control" name="fruit" required>
            </div>
            <div class="mb-2">
                <label for="">地址</label>
                <input type="text" class="form-control" name="address" required>
            </div>
            <div class="mb-2">
                <label for="">手機</label>
                <input type="tel" class="form-control" name="phones[]">
                <input type="tel" class="form-control" name="phones[]">
                <input type="tel" class="form-control" name="phones[]">
            </div>
            <div class="mb-2">
                <label for="">電信商</label>
                <select class="form-select" name="telecom" id="">
                    <option value="1">中華電信</option>
                    <option value="2">台哥大</option>
                    <option value="3">遠傳</option>
                    <option value="0">其他</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="">性別</label>
                <input type="radio" name="gender" value="male"> 男性
                <input type="radio" name="gender" value="female"> 女性
            </div>
            <button class="btn btn-info" type="submit">送出</button>
        </form>
    </div>
</body>
</html>