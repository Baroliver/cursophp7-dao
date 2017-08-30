<?php 

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega ua lista de usuarios buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search)


//Carrega um usuario usando login e a senha
$usuario = new Usuario();
$usuario->login("Amanda","12345AAA");

echo $usuario;


?>