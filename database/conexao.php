<?php
    namespace App\Src\database\conexao;

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "test";

    $conn = mysqli_connect($server, $user, $pass, $bd);

?>