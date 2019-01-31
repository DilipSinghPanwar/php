<?php

function customError($err_level,$err_msg,$err_file,$err_line,$err_content)
{
  echo "<h1>Error_level  $err_level : $err_msg</h1>";
  echo "<p>Error_line : $err_line</p>";
  echo "<p>Error_file : $err_file</p>";
  die();
}

set_error_handler("customError");


echo "<h1>Before code execution</h1>";

$a=10;
$b=10;
$c=$a/$b;
echo "<h2>a=$a</h2>";
echo "<h2>b=$b</h2>";
echo "<h2>result=$c</h2>";

$ar=array(10,20,30,40,50);
echo "<p>ar[1] : $ar[1]</p>";

echo "<h1>After code execution</h1>";

?>
