<?php

$token="mytoken";
$myid="mychatid";
$api = "https://api.telegram.org/bot".$token; //api bağlantısı

$up = file_get_contents('php://input');

$upary = json_decode($up,TRUE); //Json formatındaki veriyi deşifre edip arrya çeviriyoruz
var_dump($upary);
$chatid=$upary["message"]["chat"]["id"];
var_dump($chatid);


?>
