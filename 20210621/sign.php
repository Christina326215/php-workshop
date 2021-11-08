<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>註冊</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-4">
            <form id="form" action="doSign.php" method="post">
                <h1 class="text-center">註冊</h1>
                <div class="mb-2">
                    <label for="">帳號</label>
                    <input type="text" name="account" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">密碼</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">再輸入一次密碼</label>
                    <input type="password" id="repassword" name="repassword" class="form-control">
                </div>
                <button id="sign" class="btn btn-info" type="submit">送出</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        let sign=document.querySelector("#sign");
        let password=document.querySelector("#password");
        let repassword=document.querySelector("#repassword");
        let form=document.querySelector("#form");

        sign.addEventListener("click", function(e){
            e.preventDefault();
            let passContent=password.value;
            let repassContent=repassword.value;
            if(passContent===repassContent){
                form.submit()
            }else{
                alert("前後密碼不一致")
            }

        })

    </script>
</body>
</html>