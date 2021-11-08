<?php
require_once("../PDO_connect.php");
$stmt=$db_host->prepare("SELECT * FROM product");
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
    <title>Product List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        require("css.php");
      ?>
  </head>
  <body>
      <?php
        require("header.php");
      ?>
      <div class="container">
          <div class="row">
          <?php foreach($rows as $value){ ?>
              <div class="col-lg-3 mb-2">    
                <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item" >
                        <img class="cover-fit" src="/img/<?=$value["picture"]?>" alt="<?=$value["name"]?>">
                    </div>
                </div>
                <div class="p-3">
                    <h2 class="h4 text-center"><?=$value["name"]?></h2>
                    <div class="price text-right">$<?=$value["price"]?></div>
                    <button class="btn btn-info btn-block add-cart"
                    data-id="<?=$value["id"]?>"
                    ><i class="fas fa-cart-plus"></i></button>
                    </div>
                </div>
              </div>
              <?php } ?>
          </div>
      </div>
    <?php require("script.php") ?>
    <script>
        $(".add-cart").click(function(){
            let id=$(this).data("id");
            let formdata=new FormData();
            formdata.append("id", id);
            axios.post('/api/add-cart.php', formdata)
                .then(function (response) {
                    // console.log(response);
                    let data=response.data;
                    let status=response.data.status;
                    if(status===0){
                        alert("該商品已加入購物車")
                    }else{
                        let amount=parseInt($("#amount").text());
                        amount++;
                        $("#amount").text(amount);
                    }

                })
                .catch(function (error) {
                    console.log(error);
                });
        })
    </script>
  </body>
</html>