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
        <form action="insert-fruit.php" method="post">
            <div class="mb-2">
                <label for="">水果</label>
                <input type="text" class="form-control" name="fruit" required>
            </div>
            <div class="mb-2">
                <label for="">介紹</label>
                <textarea class="form-control" id="" name="intro" rows="5"></textarea>
            </div>
            <button class="btn btn-info" type="submit">送出</button>
        </form>
    </div>
</body>
</html>