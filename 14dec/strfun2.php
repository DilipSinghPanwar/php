<?php



$h=array('football','basketball','volleyball');
echo "Array of Hobbies :<br>";
echo "<pre>";
print_r($h);
echo "</pre>";

$hobbies=implode(',',$h);
echo "String of Hobbies :$hobbies<br><br>";

$hobbies_array=explode(',',$hobbies);
echo "Array of Hobbies :<br>";
echo "<pre>";
print_r($hobbies_array);
echo "</pre>";
