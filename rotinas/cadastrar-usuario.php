<?php

require './../rotinas/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($nome) || empty($email) || empty($senha)) {
    echo "<script> alert('Preencha todos os campos'); window.location.href='./../cadastrar.html'; </script>";
} else {
    $cadastrar = getConn()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if ($cadastrar->execute()) {
        echo "<script> alert('Usuário cadastrado com sucesso!'); window.location.href='./../index.html'; </script>";
    } else {
        echo "<script> alert('Erro ao cadastrar usuário! Tente novamente'); window.location.href='./../cadastrar.html'; </script>";
    }
}
