<?php
    require 'vendor/autoload.php';
    use App\Src\Database\Conexao;

    // Criar uma nova conexão
    $conexao = new Conexao();

    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $dataNasc = $_GET["data-nasc"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <!-- JS -->
    <script src="./src/js/main.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="assets/danilo-perfil.png" alt="">
            <img src="assets/gabriel-perfil.png" alt="">
            <img src="assets/henrique-perfil.png" alt="">
            <img src="assets/joao-perfil.png" alt="">
            <img src="assets/lucas-perfil.png" alt="">
            <img src="assets/paulo-perfil.png" alt="">
        </header>
        <main>
            <form action="" method="POST">
                <input type="hidden" value="<?php echo $id ?>" name="id" id="id">

                <label for="nome">Nome</label>
                <input type="text" value="<?php echo $nome ?>" name="nome" id="nome">

                <label for="email">Email</label>
                <input type="email" value="<?php echo $email ?>" name="email" id="email">

                <label for="data-nasc">Data de nascimento</label>
                <input type="date" value="<?php echo $dataNasc ?>" name="data-nasc" id="data-nasc">

                <button type="submit" class="edit">EDITAR</button>
            </form>
        </main>
    </div>
</body>
</html>

<?php

    try {
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["data-nasc"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dataNasc = $_POST["data-nasc"];
            
            // Preparar a chamada do procedimento armazenado com parâmetros seguros
            $sql = "CALL editar_usuario('$id', '$nome', '$email', '$dataNasc')";

            mysqli_query($conexao->conn, $sql);
            header("Location: index.php");
        }  
    } catch(Exception $err) {
        // Lidar com exceções
        echo $err->getMessage();
    }
?>