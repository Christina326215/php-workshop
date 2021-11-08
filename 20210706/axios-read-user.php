<?php
require_once("../PDO_connect.php");
$stmt=$db_host->prepare("SELECT id, name, account, email, phone FROM users");
try{
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Read User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <main class="col-lg-9">
                <div class="row">
                    <?php foreach($rows as $value){ ?>
                    <div class="col-lg-4 mb-2">
                        <button
                        data-id="<?=$value["id"]?>"
                        class="btn btn-info btn-block"><?=$value["name"]?></button>
                    </div>
                    <?php } ?>
                </div>
              </main>
              <aside class="col-lg-3">
                <h3 id="name">User</h3>
                <div id="email"></div>
                <div id="phone"></div>
              </aside>
          </div>
      </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        

        $(".btn").click(function(){
            let id=$(this).data("id")

            let formdata=new FormData();
            formdata.append("id", id);

            axios.post('/api/user.php', formdata)
                .then(function (response) {
                    console.log(response);
                    let data=response.data;
                    $("#name").text(data.name)
                    $("#email").text(data.email)
                    $("#phone").text(data.phone)

                })
                .catch(function (error) {
                console.log(error);
                });

            
        })
    </script>
  </body>
</html>