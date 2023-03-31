<?php

$data = array(
    'nome' => 'Bruno',
    'idade' => 20
);

foreach ($data as &$value){

    if(gettype($value) === 'integer'){
        $value+=10;
    }

    echo $value."<br>";
}
print_r($data);

?>