<?php

$data = array(
    "empresa"=>"Brunão Trabalhamentos"
);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 7200);

echo "OK";

?>