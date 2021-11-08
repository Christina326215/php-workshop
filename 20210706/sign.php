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
                    <input type="text" name="account" id="account" class="form-control" placeholder="請輸入 4~8 碼帳號">
                    <small class="text-danger" id="accountMsg"></small>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $("#account").on({
            "change": function(){
                // console.log("change")
                $("#accountMsg").text("");
                let account=$(this).val();
                let formdata=new FormData();
                formdata.append("account", account);

                axios.post('/api/check-user.php', formdata)
                    .then(function (response) {
                        // console.log(response);
                        if(response.data.count===1){
                            $("#accountMsg").text("這個帳號已經有人註冊過了")
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            "keyup": function(){
                $("#accountMsg").text("");
                let accountLength=$(this).val().length;
                if(accountLength<4){
                    $("#accountMsg").text("帳號太短")
                }else if(accountLength>8){
                    $("#accountMsg").text("帳號太長")
                }
            }
        })

        $("#sign").click(function(e){
            e.preventDefault();
            let passContent=$("#password").val();
            let repassContent=$("#repassword").val();
            if(passContent===repassContent){
                // alert("密碼一致")
                $("form").submit();
            }else{
                alert("前後密碼不一致")
            }
        })

    </script>
</body>
</html>