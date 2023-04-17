<?php

require_once("config.php");

// !OS CÓDIGOS/ FUNÇÕES NÃO DEVEM SER EXECUTADOS TODOS EM CONJUNTO!
// Portanto, eles não estão como comentário por questão estética

//!Carrega uma linha de id especifico!
$root = new Usuario();
$root->loadById(1);
echo $root;

//!Carrega uma lista de Usuários por nome!
$listaNome = Usuario::search("Bruno");
echo json_encode($listaNome);

// //!Carrega uma lista de todos os dados da tabela!
$list = Usuario::getList();
echo json_encode($list);

//!Sistema de login com nome e senha!
$login = new Usuario();
$login->login("Bruno MySql Lacerra", "123456789ASDFG");
echo $login;

//!INSERT de um novo usuário!
$aluno = new Usuario("Professor", ":cpf:professor");
$aluno->insert();
echo $aluno;

//!UPDATE um usuário existente!
$usuario = new Usuario();
$usuario->LoadByID(8);
$usuario->update("professor", "professor");
echo $usuario;

// !DELETE de um usuário existente!
$delete = new Usuario();
$delete->LoadByID(13);
echo $delete;
$delete->delete();


//!Carrega linhas por código direto!
$sql = new Sql();
$nome = "Bruno";
$usuarios = $sql->select("SELECT * FROM tb_usuario WHERE des_login LIKE '%$nome%'"); 
// (Recolhe linhas com o nome declarado na variavel)
echo json_encode($usuarios);

?>