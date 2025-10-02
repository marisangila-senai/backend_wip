<?php
class Conexao extends PDO
{
    private $nome;
    private $usuario;
    private $senha;
    private $servidor;

    public function __construct()
    {
        $this->nome = 'db';
        $this->usuario = 'user';
        $this->senha = '123';
        $this->servidor = 'localhost';

        $dsn = "mysql:host={$this->servidor};dbname={$this->nome};charset=utf8";

        try {
            parent::__construct($dsn, $this->usuario, $this->senha);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erro) {
            die("ERRO NA CONEXÃO: " . $erro->getMessage());
        }
    }
}
