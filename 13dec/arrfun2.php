<?php

$ar=array(1=>40,0=>20,3=>10,4=>30,2=>50);
echo "<h1>Array Before sort</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";

$ar=array_flip($ar);

echo "<h1>Array After sort</h1>";
echo "<pre>";
print_r($ar);
echo "</pre>";