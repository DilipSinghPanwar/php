<?php

date_default_timezone_set('Asia/Kolkata');

$format="d F,Y - h:i:s"; // hr 24 hour format
//$format="Y"; // year four digit
//$format="y"; // year two digit
//$format="s"; // seconds
//$format="M"; // month in 3 letters
//$format="m"; // 12 month in digit
//$format="i"; // hr 24 hour format
//$format="H"; // hr 24 hour format
//$format="h"; // hr 12 hour format
//$format="F"; // december
//$format="e"; // time zone(asia/calcutta)
//$format="D"; // Fri
//$format="d"; // current date
//$format="c"; // IST-with time zone
//$format="A"; // AM
//$format="a"; // am

$datestring=date($format);

echo $datestring;