USE db;
-- Executar depois de cadastrar um usuario. 
-- Se necessário troque pelo id do usuário que deve se tornar administrador.
UPDATE usuario SET eh_adm_usuario = 1 WHERE PK_USUARIO = 1;
