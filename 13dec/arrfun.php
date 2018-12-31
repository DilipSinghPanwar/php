<?php

$ar=array(10,20,30,40,50);
$n=count($ar);
echo "<h1>Array total elements = $n</h1>";

$ar=array(10,20,30,40,50);
$s=array_sum($ar);
echo "<h1>Sum = $s</h1>";

$ar=array(10,20,30,40,50);
echo "<h1>Array before reverse</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";

$ar1=array_reverse($ar);

echo "<h1>Array after reverse</h1>";
echo "<pre>";
print_r($ar1);
echo "</pre>";