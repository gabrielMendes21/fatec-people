DELIMITER //
CREATE PROCEDURE buscar_usuario(IN id_u INT)
BEGIN
	SELECT * FROM usuarios
    WHERE id = id_u;
END //
DELIMITER ;