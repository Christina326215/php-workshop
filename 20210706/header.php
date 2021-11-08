<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">登入</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="account">帳號</label>
            <input type="text" id="account" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">密碼</label>
            <input type="password" id="password" class="form-control">
        </div>
        <small class="text-danger" id="login-error"></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button id="login" type="button" class="btn btn-info">登入</button>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
              </ul>
              <div class="form-inline my-2 my-lg-0">
                  <?php if(!isset($_SESSION["user"])): ?>
                  <a role="button" class="btn btn-info mr-2 text-white"
                  data-toggle="modal" data-target="#loginModal"
                  >登入</a>
                  <?php else: ?>
                    <div class="mr-2">
                        hi, <?=$_SESSION["user"]["name"]?>
                    </div>
                    <a href="logout.php" class="btn btn-info mr-2 text-white">登出</a>
                    <?php endif; ?>
                  <a href="cart.php" class="btn btn-outline-info my-2 my-sm-0 position-relative" >
                    <div class="amount position-absolute" id="amount">
                        <?php
                            if(isset($_SESSION["cart"])){
                                $amount=count($_SESSION["cart"]);
                            }else{
                                $amount=0;
                            }
                        ?>
                        <?=$amount?></div>  
                    <i class="fas fa-shopping-cart"></i>
                    </a>
              </div>
          </div>
</nav>