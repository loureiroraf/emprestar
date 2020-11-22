<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
  <title>Login</title>
</head>

<body>
  <header class="menu-principal">
    <main>
      <div class="header-1">
        <div class="logo"><a href="./index.php"><img src="./img/logo.PNG" /></a></div>
      </div>
    </main>
  </header>

  <h2>Login</h2>
  <form method="POST" action="login_controller.php">
    <label>Usuário:</label><input type="text" name="usuario" id="usuario"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
    <a href="cadastro.php">Cadastre-se</a>
    
</body>

</html>