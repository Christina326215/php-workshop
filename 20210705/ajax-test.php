<!doctype html>
<html lang="en">
  <head>
    <title>Ajax</title>
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
                <div class="row" id="target">
                    <!-- <div class="col-lg-4">
                        <div class="card p-3 m-2">
                            <h3>校名</h3>
                            <button class="btn btn-info">Show Data</button>
                        </div>
                    </div> -->
                </div>
            </main>
            <aside class="col-lg-3">
                <h2 id="name"></h2>
                <ul>
                    <li>經度: <span id="lng"></span></li>
                    <li>緯度: <span id="lat"></span></li>
                </ul>
            </aside>
        </div>

      </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        //method="get" -> $_GET[""]
        // $.post("yilan.json", function(schools){
        //     // console.log(schools)
        //     schools.forEach((item)=>{
        //     let content=`<div class="col-lg-4">
        //                 <div class="card p-3 m-2">
        //                     <h3 class="h5">${item["name_origin"]}</h3>
        //                     <button
        //                     data-name="${item["name_origin"]}"
        //                     data-lat="${item["lat"]}"
        //                     data-lng="${item["lng"]}"
        //                     class="btn btn-info">Show Data</button>
        //                 </div>
        //             </div>`;
        //         $("#target").append(content)
        //     })

        //     $(".btn").on("click", function(){
        //         let name=$(this).data("name")
        //         let lng=$(this).data("lng")
        //         let lat=$(this).data("lat")
        //         $("#name").text(name)
        //         $("#lng").text(lng)
        //         $("#lat").text(lat)
        //     })

        // }, "json").done(function() {
        //     //get 成功時執行，跟上面分開的話上面可以處理回傳資料，這邊單純回傳訊息

        // }).fail(function(err) {
        //     //get 失敗的訊息
        //     console.log(err)
        // }).always(function() {
        //     //一次程序完成時執行
        //     console.log("finish")
        // });


        $.ajax({
            method: "Get",
            url: "yilan.json",
            dataType: "json"
        })
        .done(function( schools ) {
            console.log(schools)
            schools.forEach((item)=>{
            let content=`<div class="col-lg-4">
                        <div class="card p-3 m-2">
                            <h3 class="h5">${item["name_origin"]}</h3>
                            <button
                            data-name="${item["name_origin"]}"
                            data-lat="${item["lat"]}"
                            data-lng="${item["lng"]}"
                            class="btn btn-info">Show Data</button>
                        </div>
                    </div>`;
                $("#target").append(content)
            })

            $(".btn").on("click", function(){
                let name=$(this).data("name")
                let lng=$(this).data("lng")
                let lat=$(this).data("lat")
                $("#name").text(name)
                $("#lng").text(lng)
                $("#lat").text(lat)
            })

        }).fail(function(err) {
            console.log(err)
        })
        .always(function() {
            console.log("finish!")
        });


    </script>
  </body>
</html>