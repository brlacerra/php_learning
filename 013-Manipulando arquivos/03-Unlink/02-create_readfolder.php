<?php

if (!is_dir("images"))mkdir("images");
$file = fopen("images.txt", "a+");
$sep = "\r\n";

foreach (scandir("images") as $img) {
    if(!in_array($img, array(".", ".."))){

       
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $path_parts = pathinfo($filename);
        $data = array();
        $data["header"] = "PATH INFO" . $sep;
        $data["dirname"] = "dirname: " . $path_parts['dirname'] . $sep;
        $data["basename"] = "basename: " . $path_parts['basename'] . $sep;
        $data["extension"] = "extension: " . $path_parts['extension'] . $sep;
        $data["filename"] = "filename: " . $path_parts['filename'] . $sep;
        $data["size"] = "size:" . filesize($filename) . $sep;
        $data["modified"] = "data de modificação: " . date(DateTimeInterface::RFC850, filemtime($filename)) . $sep;
        $data["url"] = "url do arquivo: " . "http://localhost/php_learning/013-Manipulando%20arquivos/"
        . str_replace("\\", "/", $filename) . $sep;


        fwrite($file, implode("", $data) . "\r\n\r");
         unlink("images". DIRECTORY_SEPARATOR . $img);
    }
}
fclose($file);
?>