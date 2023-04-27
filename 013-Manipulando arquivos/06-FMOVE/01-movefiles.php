<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){

    $file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");
    fwrite($file, date(DateTimeInterface::RFC850));
    fclose($file);
}
$path_parts = pathinfo($filename);
$path_parts["filename"] = $path_parts["filename"] . rand(0, 99999);

$newname = $path_parts["filename"] . "." . $path_parts["extension"];
if(rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$newname)){
    echo "Arquivo movido com sucesso";
} else {
    echo "O arquivo não pode ser movido";
}

?>