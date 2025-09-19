<?php
    include_once("conexao.php");

    $sql = $conn->prepare("SELECT pk_usuario, email_usuario,
    eh_adm_usuario FROM usuario;");

    $sql->execute();

    if ($sql->rowCount() >= 1) {
        $usuarios = $sql->fetchAll();
    } else {
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
            Não há usuários cadastrados!
        </div>';
    }
    unset($sql);
    unset($conn);
?>