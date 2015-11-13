<?php

$to = "phong.vtv@vn.gnt-global.com";
$subject = "test";
$txt = "Hello world!";
$headers = "From: contact@offshore.gnt.com.vn" . "\r\n";

mail($to,$subject,$txt,$headers);
exit();

