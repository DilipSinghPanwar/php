<?php
//logical operator
//	&&	 ||	 !    	

$a=10;
$b=15;
$c=3;


$res=!$a>$b;
echo "Result && : $res<br>";

$res=$a>$b && $a>$c;
echo "Result && : $res<br>";

$res=$a>$b || $a>$c;
echo "Result || : $res<br>";

$res=!($a>$b && $a>$c);
echo "Result ! : $res<br>";

?>
