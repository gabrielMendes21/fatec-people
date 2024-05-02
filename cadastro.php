<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';
        use App\Src\database\conexao;

        $name = $_POST["name"];
        $email = $_POST["email"];
        $dataNasc = $_POST["dataNasc"];

        
    ?>
</body>
</html>