<?php

$str="hello world";
echo "actual string : $str<br>";
echo "index of element : ". strpos($str,'L')."<br><br>";
echo "index of element : ". stripos($str,'L')."<br><br>";

$str="hello world";
echo "no. of element in string : ". strlen($str)."<br><br>";

$str="hello world";
echo "actual string : $str<br>";
echo "new string : ". strrev($str)."<br><br>";

$str="Hello world";
echo "actual string : $str<br>";
echo "new string : ".lcfirst($str)."<br><br>";

$str="hello world";
echo "actual string : $str<br>";
echo "new string : ".ucfirst($str)."<br><br>";

$str="HELLO WORLD";
echo "actual string : $str<br>";
echo "new string : ".strtolower($str)."<br><br>";

$str="hello world";
echo "actual string : $str<br>";
$str=strtoupper($str);
echo "new string : ".  $str."<br><br>";
