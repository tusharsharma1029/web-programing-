<?php
$to="abc@gmail.com";
$from="1123@gmail.com";
$subject="hello";
$header="from".$from;
if(mail ($to,$from,$subject,$header))
	{echo="mail sent";
else
echo
 "mail not sent successfully";

}
?>