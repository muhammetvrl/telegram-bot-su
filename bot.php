<?php

$token="381827747:AAFj2H684oSJCIIawvCF_UCvs8ZWgl8yFXs";
$myid="85005635";
$api = "https://api.telegram.org/bot".$token; //api bağlantısı

$up = file_get_contents('php://input');

$upary = json_decode($up,TRUE); //Json formatındaki veriyi deşifre edip arrya çeviriyoruz
var_dump($upary);
$chatid=$upary["message"]["chat"]["id"];
var_dump($chatid);


?>