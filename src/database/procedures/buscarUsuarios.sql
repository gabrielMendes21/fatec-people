DELIMITER //
CREATE PROCEDURE buscar_usuarios()
BEGIN
	SELECT id, nome, email, DATE_FORMAT(data_nasc, '%d-%m-%Y') AS data_nasc FROM usuarios;
END //
DELIMITER ; 