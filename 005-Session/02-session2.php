<?php

require_once("03-config.php");

//Apaga todas as variáveis da sessão
session_unset();

echo $_SESSION['nome'];

//Destrói a sessão, como se o usuário não fosse mais o mesmo
session_destroy();

?>