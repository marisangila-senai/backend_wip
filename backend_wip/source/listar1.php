<?php
    include_once("conexao.php");
    $pk_usuario = $_GET["usuario"];

    $sql = $conn->prepare("SELECT pk_usuario, email_usuario, 
    senha_usuario FROM usuario WHERE pk_usuario= ?;");

    $sql->execute([$pk_usuario]);

    if ($sql->rowCount() >= 1) {
        $usuario = $sql->fetch();
    } else {
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
            Não há usuários cadastrados!
        </div>';
    }
    unset($sql);
    unset($conn);
?>