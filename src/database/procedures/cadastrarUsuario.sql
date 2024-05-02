DELIMITER //
CREATE PROCEDURE cadastrar_usuario(IN nome_u VARCHAR(255), IN email_u VARCHAR(255), IN data_nasc DATE)
BEGIN
    INSERT INTO usuarios (nome, email, data_nascimento)
    VALUES (nome_u, email_u, data_nasc_u);
END //
DELIMITER ; 