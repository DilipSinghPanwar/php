<?php

$ar=array(1=>40,0=>20,3=>10,4=>30,2=>50);
echo "<h1>Array Before sort</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";

krsort($ar); 
// sort an array on the basis of key descending order

//ksort($ar); 
// sort an array on the basis of key ascending order

//arsort($ar); 
// sort an array on the basis of value descending order

//sort($ar); 
// sort an array on the basis of key and value seperately

//asort($ar); 
// sort an array on the basis of value ascending order

echo "<h1>Array After sort</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";