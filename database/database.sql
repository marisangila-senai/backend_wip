CREATE DATABASE db;
USE db;

CREATE USER 'user'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON db.* TO 'user'@'localhost';

CREATE TABLE usuario(
	pk_usuario int PRIMARY KEY AUTO_INCREMENT, 
    email_usuario varchar(100) NOT NULL,
    senha_usuario varchar(512) NOT NULL,
    eh_adm_usuario bit(1) DEFAULT 0
);
-- Executar depois de cadastrar um usuario.
UPDATE usuario SET eh_adm_usuario = 1 WHERE PK_USUARIO = 1;
