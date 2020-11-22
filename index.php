<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
  <title>Login</title>
</head>

<body>
  <?php 
  $logged = $_SESSION['logged'] ?? null;
  if(!$logged){
    include_once 'login.php';
  }else{
    include_once 'painel.php';
  }
  //include 'header.php';?>

  
</body>

</html>