<?php

require_once("config.php");

// use Cliente\Cadastro;

// $cad = new Cadastro();
// $cad->setNome("Bruno Lacerra");
// $cad->setEmail("brufecerra@gmail.com");
// $cad->setSenha("12345");
// $cad->registrarVenda();
// echo $cad;

use Admin\Cadastro;

$cad = new Cadastro();
$cad->setNome("Bruno Lacerra");
$cad->setEmail("brufecerra@gmail.com");
$cad->setSenha("12345");
$cad->setCargo("Administrador");

echo $cad;




?>