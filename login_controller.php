<?php
session_start();
include('conexao.php');

if(isset($_GET['logout']) && $_GET['logout'] == 1){
  $_SESSION = array();
  session_destroy();
  header('Location: index.php');
}

$_SESSION['logged'] = $_SESSION['logged'] ?? false;

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$verifica = mysqli_query($conecta,$query);
  if (mysqli_num_rows($verifica)<=0){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.php';</script>";
    die();
  }else{
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    $_SESSION['logged'] = true;
    header("Location: painel.php");
  } 
?>