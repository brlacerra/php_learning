<?php

session_id('ke0v2iu1cgve2g9ve30kdrftqe');
require_once("03-config.php");

//Recria um id de sessão toda vez que o site/aplicação for acessado
session_regenerate_id();

echo session_id();
echo "<br>";
var_dump($_SESSION);

?>