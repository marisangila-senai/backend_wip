<?php

require_once __DIR__ . '/Conexao.php';

Class Login {
    private Usuario $usuario;
    public function __construct() {}
    private $senha;
    private $email;

    public function getSenha() {
    return $this->senha;
}

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function login(){
        $this->email = $_POST["email"];
        $this->senha = $_POST["senha"];
        $this->usuario = new Usuario();
        $resultando = $this->usuario->buscarPorEmail($this->email);
        
        if ($resultando->rowCount() == 1) {

            $resultado = $resultando->fetch();

            if ($resultado['senha_usuario'] === hash('sha512', $this->senha)) {
                session_start();
                $_SESSION['pk_usuario'] = $resultado['pk_usuario'];
                $_SESSION['eh_adm_usuario'] = $resultado['eh_adm_usuario'];
                $_SESSION['loggedin'] = true;
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
    public function logout(){
            session_destroy();
            header("location:../index.html");
    }
}