<?php
// session_start();
include('conexao.php');

$usuario = mysqli_real_escape_string($conecta, $_POST['usuario']);
$senha = mysqli_real_escape_string($conecta, $_POST['senha']);


if(empty($usuario) || empty($senha)) {
	header('Location: cadastro.html');
	exit();
}

$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conecta, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.html');
	exit();
}