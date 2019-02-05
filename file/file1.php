<?php
$fp=fopen("data.txt","w");

$data="this is my file content we are working on files in php,this is my file content we are working on files in php,this is my file content we are working on files in php,this is my file content we are working on files in php,this is my file content we are working on files in php";

fwrite($fp,$data);

fclose($fp);

?>
