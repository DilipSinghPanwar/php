<?php

$h=array("football","basketball","volleyball");
echo "<h1>Array</h1>";
echo "<pre>";
print_r($h);
echo "</pre>";

$hobbies=implode(',',$h);

echo "<h1>Hobbies : $hobbies</h1>";
