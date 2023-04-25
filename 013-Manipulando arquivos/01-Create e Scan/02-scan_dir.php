<?php

$images = scandir("images");

$data = array();

foreach ($images as  $img) {
    if(!in_array($img, array(".",".."))){

        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date(DateTimeInterface::RFC850, filemtime($filename));

        $info["url"] = "http://localhost/php_learning/013-Manipulando%20arquivos/"
        . str_replace("\\", "/", $filename);
        array_push($data, $info);
    }
}
echo json_encode($data, JSON_UNESCAPED_SLASHES);
?>