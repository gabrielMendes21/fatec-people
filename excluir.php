<?php
    require 'vendor/autoload.php';
    use App\Src\Database\Conexao;

    // Criar uma nova conexão
    $conexao = new Conexao();

    $id = $_GET["id"];

    // Preparar a chamada do procedimento armazenado com parâmetros seguros
    $sql = "CALL remover_usuario('$id')";

    try {
        // Executar a consulta
        mysqli_query($conexao->conn, $sql);
        header("Location: index.php");
    } catch(Exception $err) {
        // Lidar com exceções
        echo $err->getMessage();
    }
?>