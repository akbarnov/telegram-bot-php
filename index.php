<?
include "lib.php";

$message_text = "test";
$telegram_id = "1570512540";
$img_dir = "";
sendMessage($telegram_id,$message_text);

sendPhoto($telegram_id,$img_dir);


?>