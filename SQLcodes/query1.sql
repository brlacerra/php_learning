USE dbphp8;

CREATE TABLE tb_usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    des_login VARCHAR(64) NOT NULL,
    des_senha VARCHAR(256) NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuario(des_login, des_senha) VALUES('root','12345');

SELECT * FROM tb_usuario;

UPDATE tb_usuario SET des_senha = '123456' WHERE id_usuario = 1;

DELETE FROM tb_usuario WHERE id_usuario = 1;

TRUNCATE TABLE tb_usuario;