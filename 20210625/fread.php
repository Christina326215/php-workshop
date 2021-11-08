<?php
$handle=fopen("output.txt", "r");
while($line = fgets($handle)){
    echo $line;
}
echo "<br>";
rewind($handle);
echo fgetc($handle);
fclose($handle);

?>