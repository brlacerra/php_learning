<?php

function test($callback){

    //Processo lento
    $callback();
}

test(function(){
    echo "Terminou";
});

echo "<br>";

$fn = function($a){

    var_dump($a);

};

$fn("OI");

?>