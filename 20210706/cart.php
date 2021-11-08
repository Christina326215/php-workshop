<?php
require_once("../PDO_connect.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <title>cart</title>
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
          <?php if(!isset($_SESSION["cart"])): ?>
            您的購物車是空的喔
        <?php else: ?>
          <div class="row justify-content-center">
              <div class="col-lg-10 mt-5">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>商品</th>
                            <th>單價</th>
                            <th>數量</th>
                            <th>小計</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total=0;
                        foreach($_SESSION["cart"] as $product){ ?>
                            <tr>
                            <?php foreach($product as $key=>$value){ 
                                $sql="SELECT * FROM product WHERE id=?";
                                $stmt=$db_host->prepare($sql);
                                $stmt->execute([$key]);
                                $row=$stmt->fetch();

                                ?>
                                <td><?=$row["name"]?></td>
                                <td class="text-right"><?=$row["price"]?></td>
                                <td class="text-right">
                                    <!-- <input type="number" class="form-control" value="<?=$value?>"> -->
                                    <?=$value?>
                                </td>
                                <td class="text-right">
                                    <?php 
                                    $subtotal=$row["price"]*$value;
                                    $total+=$subtotal;
                                    echo $subtotal;
                                    ?>
                                </td>
                            <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-right" colspan="4">
                                總價: <span><?=$total?></span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="py-2 text-right">
                    <a class="btn btn-info" href="pay.php">結帳</a>
                </div>
              </div>
              <?php endif; ?>
          </div>
      </div>
    <?php require("script.php") ?>

  </body>
</html>