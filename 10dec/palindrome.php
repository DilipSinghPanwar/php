<?php
$n=1221;
$b=0;
$temp=$n;

while($n):
	$a=$n%10;
	$b=$b*10+$a;
	$n=(int)($n/10);
endwhile;

if($temp==$b):
	echo "<h1>Number is palindrome</h1>";
else:
	echo "<h1>Number is not palindrome</h1>";	
endif;
?>
