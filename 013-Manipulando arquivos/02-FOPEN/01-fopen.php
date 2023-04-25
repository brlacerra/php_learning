<?php

$file = fopen("log.txt", "a+");
$sep = "\r\n";

$log = array("Log information:$sep");
$log["date"] = date(DateTimeInterface::RFC850 . $sep);
$log["ip"] = $_SERVER["REMOTE_ADDR"] . $sep;
$log["dispositivo"] = gethostbyaddr($_SERVER['REMOTE_ADDR']). $sep;

fwrite($file, implode("", $log) . "\r\n\r");


fclose($file);

echo "Arquivo criado com sucesso";

?>