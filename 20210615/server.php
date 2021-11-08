<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    <?php
        echo "PHP_SELF:".$_SERVER["PHP_SELF"]."<br>" ;
        echo "SERVER_ADDR:".$_SERVER["PSERVER_ADDR"]."<br>" ;
        echo "SERVER_NAME:".$_SERVER["SERVER_NAME"]."<br>" ;
        echo "REQUEST_METHOD:".$_SERVER["REQUEST_METHOD"]."<br>" ;
        echo "REMOTE_ADDR:".$_SERVER["REMOTE_ADDR"]."<br>" ;
        echo "HTTP_HOST:".$_SERVER["HTTP_HOST"]."<br>" ;
        echo "DOCUMENT_ROOT:".$_SERVER["DOCUMENT_ROOT"]."<br>" ;
    ?>
</body>
</html>