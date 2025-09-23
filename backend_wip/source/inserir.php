<?php
    echo "Hello world!<br>";
    $email = $_POST["email"];
    $_POST["senha"];
    
    printf(format:"Email: $s <br>", values: $email);
    printf(format:"Senha: $s <br>", values: $senha);

$sql = $conn ->prepare("INSERT INTO usuario 
(email_usuario,senha_usuario) VALUE (?,?)") ;

unset($sql);
unset($conn);
header("location:../pages/cadastrar.php");
?>