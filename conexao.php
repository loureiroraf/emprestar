<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "emprestar";

$conecta = mysqli_connect($servidor, $usuario, $senha, $db);

if(!$conecta){
    die("Falha na conexao: " .mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}  

?>