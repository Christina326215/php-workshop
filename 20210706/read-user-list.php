<!doctype html>
<html lang="en">
  <head>
    <title>read user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <table class="table table-bordered table-sm">
              <thead>
                  <tr>
                      <th>帳號</th>
                      <th>姓名</th>
                      <th>email</th>
                      <th>電話</th>
                  </tr>
              </thead>
              <tbody>
                <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> -->
              </tbody>
          </table>
      </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
        $.ajax({
            method: "get",
            url: "/api/user-list.php",
            dataType: "json"
        }).done(function( data ) {
            // console.log(data)
            // $("body").append(data)
            let content="";
            data.forEach((user)=>{
                // $("tbody").append(`
                // <tr>
                //     <td>${user.account}</td>
                //     <td>${user.name}</td>
                //     <td>${user.email}</td>
                //     <td>${user.phone}</td>
                // </tr>
                // `)
                content+=`
                <tr>
                    <td>${user.account}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.phone}</td>
                </tr>
                `
            })
            $("tbody").append(content)
        }).fail(function(err) {
            console.log(err)
        })
  </script>
  </body>
</html>