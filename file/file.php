<?php
$fp=fopen("data.txt","w");

echo "$fp<br><br>";
echo "datatype : ".gettype($fp)."<br><br>";

fclose($fp);

?>
