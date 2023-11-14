<?php

function trataNome($name){

    if(!$name){
        throw new Exception("Nenhum nome foi informado", 1001);
    }

    echo ucfirst($name)."<br>";
}
try {

    trataNome("Bruno");
    trataNome("");

} catch (Exception $e) {

    echo $e->getMessage();

} finally {
    echo "Executou o bloco Try!";
}

?>