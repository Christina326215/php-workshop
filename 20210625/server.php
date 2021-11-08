<?php
echo $_SERVER["PHP_SELF"]."<br>"; // /20210625/server.php
echo $_SERVER["SCRIPT_FILENAME"]."<br>"; // /Applications/XAMPP/xamppfiles/htdocs/20210625/server.php
echo __FILE__."<br>"; // /Applications/XAMPP/xamppfiles/htdocs/20210625/server.php
echo __DIR__."<br>"; // /Applications/XAMPP/xamppfiles/htdocs/20210625
echo realpath(".")."<br>"  // /Applications/XAMPP/xamppfiles/htdocs/20210625
?>
<h2>path info</h2>
<?php 
$path=__FILE__;

echo "PATHINFO_DIRNAME: ".pathinfo($path, PATHINFO_DIRNAME)."<br>"; //PATHINFO_DIRNAME: /Applications/XAMPP/xamppfiles/htdocs/20210625
echo "PATHINFO_BASENAME: ".pathinfo($path, PATHINFO_BASENAME)."<br>";//PATHINFO_BASENAME: server.php
echo "PATHINFO_EXTENSION: ".pathinfo($path, PATHINFO_EXTENSION)."<br>";// PATHINFO_EXTENSION: php
echo "PATHINFO_FILENAME: ".pathinfo($path, PATHINFO_FILENAME)."<br>";// PATHINFO_FILENAME: server



?>