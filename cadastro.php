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
        use App\Src\Database\Conexao;

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $dataNasc = htmlspecialchars($_POST["dataNasc"]);

        // Criar uma nova conexão
        $conexao = new Conexao();

        // Preparar a chamada do procedimento armazenado com parâmetros seguros
        $sql = "CALL cadastrar_usuario('$name', '$email', '$dataNasc')";

        try {
            // Executar a consulta
            mysqli_query($conexao->conn, $sql);
            header("Location: index.php");
        } catch(Exception $err) {
            // Lidar com exceções
            echo $err->getMessage();
        }
    ?>
</body>
</html>
