<?php

$connect = new mysqli("localhost", "root", "dbphp8");

if($connect->connect_error){

    echo "Error ".$connect_error;

}


?>