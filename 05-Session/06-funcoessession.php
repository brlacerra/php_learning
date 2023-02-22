<?php

require_once("03-config.php");
echo session_id();
echo "<br>";
echo "<br>";
var_dump($_SESSION);
echo "<br>";
echo "<br>";
echo session_save_path();
echo "<br>";
echo "<br>";

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "Sessões desabilitadas";
        break;

    case PHP_SESSION_NONE:
        echo "Sessão habilitada, porém inexistente";
            break;

    case PHP_SESSION_ACTIVE:
        echo "Sessão habilitada e ativa";
        break;

}
?>