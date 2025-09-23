<?php
    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha_hash = hash('sha256', $senha);

    $sql = $conn-> prepare("INSERT INTO usuario (email_usuario, senha_usuario) VALUE (?,?)");

    $sql->execute([$email, $senha_hash]);

    unset($sql);
    unset($conn);
    
    header("location:../pages/cadastrar.php");
?>