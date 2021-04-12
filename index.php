<?php

session_start();
require './rotinas/conexao.php';

if (isset($_SESSION['logado']['email']) and isset($_SESSION['logado']['senha'])) {

    header('Location: ./dash/index.php');
    exit;
}
?>

<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login | Senha Robusta </title>
    <link rel="stylesheet" href="./_css/bootstrap.min.css" />
    <link rel="stylesheet" href="./_css/style.css" />
  </head>

  <body>
    <div class="row">
      <div class="col"></div>

      <div class="col-6">
        <form action="./rotinas/autenticacao.php" method="POST">
          <input type="email" name="email" id="email" placeholder="E-mail" />
          <input type="password" name="senha" id="senha" placeholder="Senha" />
          <p> Não tem uma conta? <a href="./cadastrar.html"> Crie uma. </a> </p>
          <input type="submit" value="Entrar">
        </form>
      </div>

      <div class="col"></div>
    </div>

    <script src="./_js/script.js"></script>
  </body>
</html>
