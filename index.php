<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuário só
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega a lista de todos os usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("lu");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Lucas","abcd");
//echo $usuario;

//Insere um usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->delete();

echo $usuario;

 ?>