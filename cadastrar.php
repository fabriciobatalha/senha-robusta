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
    <title> Cadastrar | Senha Robusta </title>
    <link rel="stylesheet" href="./_css/bootstrap.min.css" />
    <link rel="stylesheet" href="./_css/style.css" />
  </head>

  <body>
    <div class="row">
      <div class="col"></div>

      <div class="col-6">
        <form action="./rotinas/cadastrar-usuario.php" method="POST">
            <input type="text" name="nome" id="nome" placeholder="Nome" required />
            <input type="email" name="email" id="email" placeholder="E-mail" required />
            <input type="password" name="senha" id="senha" placeholder="Senha" required />
            <p> Já possui uma conta? <a href="./index.php"> Faça login. </a> </p>
            <input type="submit" value="Cadastrar">
        </form>
      </div>

      <div class="col"></div>
    </div>

    <script src="./_js/script.js"></script>
  </body>
</html>
