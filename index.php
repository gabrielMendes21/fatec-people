<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FATEC play</title>

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
        <div class="vertical-line"></div>
        <div class="content">
            <aside>
                <div class="add">                    
                    <img src="./assets/add-circle.svg" alt="Sinal de mais">
                    <span>Adicionar pessoa</span>
                </div>
            </aside>

            <div class="modal">
                <img src="./assets/x-icon.svg" alt="close icon" class="close">
                <form action="cadastro.php" method="POST">
                    <h2>Adicionar pessoa</h2>

                    <label for="name">Nome</label>
                    <input type="text" placeholder="Digite seu nome" id="name" name="name" required>

                    <label for="email">Email</label>
                    <input type="text" placeholder="Digite o seu email" id="email" name="email" required>

                    <label for="data-nascimento">Data de nascimento</label>
                    <input type="date" placeholder="Digite a sua data de nascimento" id="data-nascimento" name="dataNasc" required>

                    <button type="submit">Enviar</button>
                </form>
            </div>

            <main>
                <?php
                    require 'vendor/autoload.php';
                    use App\Src\Database\Conexao;

                    // Criar uma nova conexão
                    $conexao = new Conexao();

                    // Preparar a chamada do procedimento armazenado com parâmetros seguros
                    $sql = "CALL buscar_usuarios()";

                    try {
                        // Executar a consulta
                        $users = mysqli_query($conexao->conn, $sql);

                        foreach ($users as $user) {
                            echo '<div class="card-dados">
                            <img src="./assets/iconUser.png" alt="iconUser" class="iconUser">
                            <span>' . $user['nome'] . '</span>
                            <span>' . $user['email'] . '</span>
                            <span>' . $user['data_nascimento'] . '</span>
                            <hr>
                            <div class="operations">
                                <a href="#">EDITAR</a>
                                <a href="#">EXCLUIR</a>
                            </div>
                            </div>';
                        }
                    } catch(Exception $err) {
                        // Lidar com exceções
                        echo $err->getMessage();
                    }
                ?>

                
            </main>
        </div>
    </div>
</body>
</html>