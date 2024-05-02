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
            <img src="./assets/logo.png" alt="logo">
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
                <form action="">
                    <h2>Adicionar música</h2>

                    <label for="name">Nome</label>
                    <input type="text" placeholder="Digite seu nome" id="name" name="name">

                    <label for="music-name">Nome da música</label>
                    <input type="text" placeholder="Digite o nome da música" id="music-name" name="musicName">

                    <label for="genero">Gênero da música</label>
                    <select name="genero" id="genero">
                        <option value="rock">Rock</option>
                    </select>
                    
                    <label for="music-link">Link</label>
                    <input type="text" placeholder="Digite o Link da música" id="music-link" name="musicLink">

                    <button type="submit">Enviar</button>
                </form>
            </div>

            <main>         
                <div class="card-music">
                    <div class="operations">
                        <button>EDITAR</button>
                        <button>EXCLUIR</button>
                    </div>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/uDsljnSyk3g" frameborder="0" allowfullscreen></iframe>
                    <p>NOME DA MUSICA</p>
                    <p>MAIS INFO</p>
                </div>

                <div class="card-music">
                    <div class="operations">
                        <button>EDITAR</button>
                        <button>EXCLUIR</button>
                    </div>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/uDsljnSyk3g" frameborder="0" allowfullscreen></iframe>
                    <p>NOME DA MUSICA</p>
                    <p>MAIS INFO</p>
                </div>

                <div class="card-music">
                    <div class="operations">
                        <button>EDITAR</button>
                        <button>EXCLUIR</button>
                    </div>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/uDsljnSyk3g" frameborder="0" allowfullscreen></iframe>
                    <p>NOME DA MUSICA</p>
                    <p>MAIS INFO</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>