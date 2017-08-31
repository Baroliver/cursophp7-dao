<?php 

require_once("config.php");


//Select  ****** Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Select **** Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);


//Select  ***** Carrega ua lista de usuarios buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search)


//Select  ******* Carrega um usuario usando login e a senha
//$usuario = new Usuario();
//$usuario->login("Amanda","12345AAA");
//echo $usuario;


//Insert ***** Insere um novo usuario com o construtor
//$aluno = new Usuario("Jean","@Jose$");
//$aluno->insert();
//echo $aluno;
/////////////////////////////////////////
//Modo antigo sem o construtor
//$aluno->setDeslogin("Varao");
//$aluno->setDessenha("@Jesus");
//$aluno->insert();

//Update  *****
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%");

echo $usuario;


?>