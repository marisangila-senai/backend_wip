<?php

include_once("conexao.php");

echo "Conectando ao banco de dados...<br>\n";

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = md5($senha); 

printf("Email: %s<br>\n", $email);  
printf("Senha : %s<br>\n", $senha);


$verifica = $conn->prepare("SELECT COUNT(*) FROM usuario WHERE email_usuario = ?");
$verifica->execute([$email]);
$existe = $verifica->fetchColumn();

if ($existe > 0) {
    echo "Erro: Este e-mail já está cadastrado.<br>\n";

    exit;
}


$sql = $conn->prepare("INSERT INTO usuario (email_usuario, senha_usuario) VALUES (?, ?)");
$sql->execute([$email, $senha]);

unset($sql);
unset($conn);


header("Location: ../index.html");
exit;

?>
