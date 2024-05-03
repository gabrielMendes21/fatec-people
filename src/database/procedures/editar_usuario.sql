DELIMITER //
CREATE PROCEDURE editar_usuario(IN id_u INT, IN nome_u VARCHAR(255), IN email_u VARCHAR(255), IN data_nasc_u DATE)
BEGIN
	UPDATE usuarios 
    set usuarios.nome = nome_u, usuarios.email = email_u, usuarios.data_nasc = data_nasc_u
    WHERE usuarios.id = id_u;
END //
DELIMITER ;