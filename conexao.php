<?php
$servidor = "localhost";
$usuario = "root";
$senha = "D0ming0s_2006";
$db = "emprestimo";

$conecta = mysqli_connect($servidor, $usuario, $senha, $db);

if(!$conecta){
    die("Falha na conexao: " .mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}  

?>