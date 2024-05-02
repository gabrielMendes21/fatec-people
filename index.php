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
            <img src="./assets/logo2.jpg" alt="logo">
        </header>
        <div class="vertical-line"></div>
        <div class="content">
            <aside>
                <div class="add">                    
                    <img src="./assets/add-circle.svg" alt="Sinal de mais">
                    <span>Adicionar música</span>
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
                <div class="card-dados">
                    <span>Gabriel Mendes</span>
                    <span>gabriel.mendes19@fatec.sp.gov.br</span>
                    <span>21/11/2005</span>
                    <hr>
                    <div class="operations">
                        <button>EDITAR</button>
                        <button>EXCLUIR</button>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>