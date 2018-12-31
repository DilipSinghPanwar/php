<?php


$str=" hello world";
echo "actual string:$str<br>";
$str=trim($str);
echo "New string:$str<br><br>";


$str="hello world";
echo "actual string : $str<br>";
echo "new string element : ".  str_replace("L","p",$str)."<br><br>";
echo "new string element : ".  str_ireplace("L","p",$str)."<br><br>";


