<?php

include_once("conexao.php"); 

$email = $_POST["email"];
$senha = $_POST["senha"];
$hash = hash('sha256', $senha); 

$sql = $conn->prepare("SELECT email_usuario, senha_usuario, eh_adm_usuario FROM usuarios WHERE email_usuario = :email");
$sql->execute(['email' => $email]);

if ($sql->rowCount() == 1) {
    $row = $sql->fetch(PDO::FETCH_ASSOC);

    if ($hash === $row['senha_usuario']) {


        header("Location: ../pages/home.php");
        exit;
    } else {
        echo "Senha ou email incorretos!";
    }
} else {
    echo "Senha ou email incorretos!";
}

?>