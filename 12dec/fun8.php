<?php
function demo()
{
  global $b;	
  $b=20;	
  echo "<h1>inside function a=".$GLOBALS['a']."</h1>";	
  echo "<h1>inside function b=$b</h1>";
}

$a=10;
demo();
echo "<h1>outside function a=$a</h1>";
echo "<h1>outside function b=$b</h1>";
?>
