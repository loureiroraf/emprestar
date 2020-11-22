<?php

include ("conexao.php");

$usuario = mysqli_real_escape_string($conecta, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conecta, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conecta, trim($_POST['email']));
$nome = mysqli_real_escape_string($conecta, trim($_POST['nome']));

$query_select = "SELECT count(*) as total FROM usuarios WHERE usuario = '$usuario'";
$result = mysqli_query($conecta, $query_select);
$row = mysqli_fetch_assoc($result);

  if($row['total'] >= 1){
    echo"<script language='javascript' type='text/javascript'>
    alert('Usuario já cadastrado!');window.location.
    href='cadastro.php'</script>";

  }else{
    $query = "INSERT INTO usuarios (nome ,usuario, senha, email) VALUES ('$nome','$usuario', '$senha', '$email')";
    $insert = mysqli_query($conecta,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.
      href='login.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');window.location
      .href='cadastro.php'</script>";
    }
  }
?>