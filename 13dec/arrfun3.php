<?php

$ar=array(10,20,30,40,50,60,70,80);
echo "<h1>Actual</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";

$ar=  array_chunk($ar,3);

echo "<h1>New Array</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";