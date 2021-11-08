<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "My first php" ?></title>
</head>
<body>
<?php
    $name=$_GET["name"];
    $welcome="Hello World!!";
    
    $name="John";
?>
    <h1><?php echo "Hello World!!"; ?></h1>
    <h1><?= $welcome ?>, <?=$name?>.</h1>
    <h1><?= $welcome.", ".$name."." ?></h1>
</body>
</html>