<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
  <title>Cadastro</title>
</head>

<body>
  <header class="menu-principal">
    <main>
      <div class="header-1">
        <div class="logo"><a href="./index.php"><img src="./img/logo.PNG" /></a></div>
      </div>
    </main>
  </header>
  <h2>Faça seu Cadastro</h2>
  <form method="POST" action="cadastro_controller.php">
    <label>Nome:</label>
    <input type="text" id="nome" name="nome" /><br />
    <label>Email:</label>
    <input type="email" id="email" name="email" /><br />
    <label>Usuário:</label>
    <input type="text" id="usuario" name="usuario" value="" /> <br />
    <label>Senha:</label>
    <input type="password" id="senha" name="senha" value="" /><br />
    <input type="submit" id="cadastrar" value="Cadastrar" />
  </form>
</body>

</html>