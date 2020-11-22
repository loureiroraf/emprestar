<?php
session_start();
$logged = $_SESSION['logged'] ?? NULL;
if(!$logged) {
	header("Location: painel.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
</head>
<body>
	<<?php include 'header.php'; ?>
	<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
</body>
</html>
