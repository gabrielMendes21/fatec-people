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

            <div class="modal-cadastro">
                <img src="./assets/x-icon.svg" alt="close icon" class="close-add">
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

            <div class="modal-edicao">
                <img src="./assets/x-icon.svg" alt="close icon" class="close-edit">
                <form action="cadastro.php" method="POST">
                    <h2>Editar pessoa</h2>

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

                        if (mysqli_num_rows($users) > 0) { 
                            foreach ($users as $user) {
                                echo '<div class="card-dados">
                                <img src="./assets/iconUser.png" alt="iconUser" class="iconUser">
                                <span>' . $user['nome'] . '</span>
                                <span>' . $user['email'] . '</span>
                                <span>' . $user['data_nasc'] . '</span>
                                <hr>
                                <div class="operations">
                                <button type="button" class="edit">EDITAR</button>
                                <form action="excluir.php" method="POST">
                                <input style="display: none; type="text" value="'. $user["id"] . '" name="id">
                                <button>EXCLUIR</button>
                                </form>
                                </div>
                                </div>';
                            }
                        } else {
                            echo "<span class='empty-message'>Não existem usuários cadastrados 😕</span>";
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