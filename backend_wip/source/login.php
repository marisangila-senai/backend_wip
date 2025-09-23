<?php
    include_once("conexao.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $hash = hash('sha512', $senha);
    $sql = $conn->prepare("SELECT email_usuario, 
    senha_usuario, eh_adm_usuario FROM
     usuario WHERE email_usuario = ?;");
    $sql->execute([$email]);
    if($sql->rowCount() == 1){
        $row = $sql->fetch();
        if($hash == $row["senha_usuario"]){
            header("location:../pages/pagina_inicial.php");
        }else{
            echo "E-mail ou Senha inválidos!";
        }
    }else{
        echo "E-mail ou Senha inválidos!";
    }
    unset($sql);
    unset($conn);
?>