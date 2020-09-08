<?php

require_once("config.php");

$user = new Usuario();

$user->loadbyid(1);

echo $user;

























//$sql = new Sql();
//$usuarios = $sql->select("SELECT*FROM tb_usuario");
//echo json_encode($usuarios);

?>
