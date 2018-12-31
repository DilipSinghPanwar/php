<?php

demo();
echo "<h1>Before function call</h1>";

function demo()
{
	echo "<h1>Demo function invoked</h1>";
}

demo();
demo();
demo();

echo "<h1>After function call</h1>";

?>
