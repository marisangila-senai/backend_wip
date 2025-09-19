<?php
    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $pk_usuario = $_GET["usuario"];
    
    $sql = $conn->prepare("UPDATE usuario SET email_usuario = ?,
     senha_usuario = ? WHERE pk_usuario= ?;");
    $sql->execute([$email,$senha,$pk_usuario]);

    unset($sql);
    unset($conn);
    header("location:../pages/pagina_inicial.php")
?>