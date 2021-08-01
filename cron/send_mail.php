<?php

$subject = "THis is test subject";
$msg = "This is test message";
$user_email = "haidergoher2@gmail.com";

$mailsend=mail("haiderdigiskills@gmail.com","$subject","$msg","From: ".$user_email."\r\n");

?>