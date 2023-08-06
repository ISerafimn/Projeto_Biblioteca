<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="stylesheet" href="../../design/login-cadastro.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        input::placeholder {
            color: rgb(52, 52, 52);
        }
        input{
            width: 250px;
            color: black;
        }
        input::-webkit-inner-spin-button{
            display: none;
        }
    </style>
</head>
<body>
<div style="background-color: #1f1919;">
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="../generos_literario.html">GÊNEROS LITERARIOS</a>
                    <div class="dp-menu">
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Romance">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Fantasia">
                            <button type="submit" name="Submit">Fantasia</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Poesia">
                            <button type="submit" name="Submit">Poesia</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Ficcao">
                            <button type="submit" name="Submit">Ficção</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Conto">
                            <button type="submit" name="Submit">Conto</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Terror">
                            <button type="submit" name="Submit">Terror</button>
                        </form>
                        <form method="post" action="../php/lista_genero.php">
                            <input name="genero" value="Aventura">
                            <button type="submit" name="Submit">Ação e Aventura</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a href="../livros.php">LIVROS</a>
                </li>
                <li>
                    <a href="../contato.html">CONTATO</a>
                </li>
                <li class="dropdown">
                <a href="../gerenciar.html" style="width: 150px; text-align: center;">GERENCIAR</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <a href="livro_lista.php">Livros</a>
                        <a href="../gerenciar_autor/autor_lista.php">Autor</a>
                        <a href="../gerenciar_usuario/usuario_lista.php">Usuarios</a>
                        <a href="movimentacao_lista.php">Movimentação</a>
                    </div>
                </li>
                <li>
                    <a href="../index.php">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="../perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                    <div class="dp-menu" style="width: 125px; text-align: center;">
                        <a href="../perfil.php">Meu Perfil</a>
                        <a href="../../php/logout.php">Sair</a>
                    </div>
                </li>
            </ul> 
        </nav>
    </div>

    <br>

    <nav>
        <ul>
            <li>
                <a href="livro_lista.php" style="width: 150px; text-align: center;">LISTA LIVROS</a>
            </li>
            <li class="dropdown">
                <a href="consultar_por.html" style="width: 150px; text-align: center;">CONSULTAR por:</a>
                <div class="dp-menu">
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="id_livro" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="nome_livro" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="id_autor" style="display: none;">
                        <button type="submit" name="Submit">Autor</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="editora_livro" style="display: none;">
                        <button type="submit" name="Submit">Editora</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="genero_livro" style="display: none;">
                        <button type="submit" name="Submit">Gênero</button>
                    </form>
                </div>
            </li>
            <li>
                <a href="adicionar_livro.php" style="width: 150px; text-align: center;">Adicionar LIVRO</a>
            </li>
            <li class="dropdown">
                <a href="atualizar_livro_por.html" style="width: 150px; text-align: center;">ATUALIZAR LIVRO por:</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <form method="post" action="variaveis_atualizar_livro.php">
                            <input name="atualizar" value="id_livro" style="display: none;">
                            <button type="submit" name="Submit">Id</button>
                        </form>
                        <form method="post" action="variaveis_atualizar_livro.php">
                            <input name="atualizar" value="nome_livro" style="display: none;">
                            <button type="submit" name="Submit">Nome</button>
                        </form>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="excluir_livro_por.html" style="width: 150px; text-align: center;">Excluir LIVRO por:</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                    <form method="post" action="variaveis_excluir_livro.php">
                        <input name="excluir" value="id_livro" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_excluir_livro.php">
                        <input name="excluir" value="nome_livro" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                    </div>
                </li>
        </ul>
    </nav>

    <br>

    <h1>CADASTRO DE LIVRO</h1>
    <form method="post" action="../../php/variaveis_livro.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_livro" type="text" placeholder="Digite o nome do livro"></td>
            </tr>
            <tr>
                <td>Autores:</td>
                <td>
                    <select name="name" style="width: 250px; color: rgb(52, 52, 52)">
                        <option>Autores:</option>
                        <?php
                            include('../../php/conexao.php');
                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td><input name="genero_livro" type="text" placeholder="Digite o nome do gênero"></td>
            </tr>
            <tr>
                <td>Editora:</td>
                <td><input name="editora_livro" type="text" placeholder="Digite o nome da editora"></td>
            </tr>
            <tr>
                <td>Número da Edição:</td>
                <td><input name="num_edicao_livro" type="number" placeholder="Digite o número da edição"></td>
            </tr>
                <td>Sinopse:</td>
                <td><input name="sinopse_livro" type="text" placeholder="Digite a sinopse do livro"></td>
            </tr>
            <tr>
                <td>Estoque:</td>
                <td><input name="estoque_livro" type="number" placeholder="Digite o número de livros no estoque"></td>
            </tr>
            <tr>
                <td>Url da Capa</td>
                <td><input type="text" name="url_imagem_livro" placeholder="Digite a URL da capa do livro"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Concluir Cadastro</button>
    </form>
    
</body>
</html>