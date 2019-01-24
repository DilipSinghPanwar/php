<?php
function sendMsg($mobile,$msg)
{
   $ch = curl_init();
$user="shivangiaday29@gmail.com:123456";
$receipientno="$mobile";
$senderID="TEST SMS";
$msgtxt="$msg";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
curl_close($ch);
if(empty ($buffer))
{ return 0; }
else
{ return 1; }

}

?>
