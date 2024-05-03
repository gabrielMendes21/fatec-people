DELIMITER //
CREATE PROCEDURE buscar_usuarios()
BEGIN
	SELECT 
        id, 
        nome, 
        CONCAT(
            SUBSTRING_INDEX(email, '@', 1), -- Parte antes do '@'
            '@',
            REPEAT('*', CHAR_LENGTH(SUBSTRING_INDEX(email, '@', -1))) -- Parte após o '@' (com asteriscos)
        ) AS email, 
        DATE_FORMAT(data_nasc, '%d-%m-%Y') AS data_nasc FROM usuarios;
END //
DELIMITER ; 