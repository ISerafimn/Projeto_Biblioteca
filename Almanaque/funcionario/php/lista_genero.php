<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genero</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="dropdown">
                <a href="../generos_literario.html">GÊNEROS LITERARIOS</a>
                <div class="dp-menu">
                <form method="post" action="lista_genero.php">
                            <input name="genero" value="Romance">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Fantasia">
                            <button type="submit" name="Submit">Fantasia</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Poesia">
                            <button type="submit" name="Submit">Poesia</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Ficcao">
                            <button type="submit" name="Submit">Ficção</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Conto">
                            <button type="submit" name="Submit">Conto</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Terror">
                            <button type="submit" name="Submit">Terror</button>
                        </form>
                        <form method="post" action="lista_genero.php">
                            <input name="genero" value="Aventura">
                            <button type="submit" name="Submit">Ação e Aventura</button>
                        </form>
                </div>
            </li>
            <li>
                    <a href="../contato.html">CONTATO</a>
                </li>
                <li class="dropdown">
                    <a href="#" style="width: 170px; text-align: center;">GENERENCIAR</a>
                    <div class="dp-menu" style="width: 170px; text-align: center;">
                        <a href="livro_lista.php">Livros</a>
                        <a href="usuario_lista.php">Usuarios</a>
                        <a href="movimentacao_lista.php">Movimentação</a>
                    </div>
                </li>
                <li>
                    <a href="../index.html">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="../perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                    <div class="dp-menu" style="width: 125px; text-align: center;">
                        <a href="../perfil.php">Meu Perfil</a>
                        <a href="../php/logout.php">Sair</a>
                    </div>
                </li>
            </ul> 
        </nav>
    </div>

    <table style border="1">
    <tr>
        <th>ID</th>
        <th>CAPA</th>
        <th>NOME</th>
        <th>AUTOR</th>
        <th>GENERO</th>
        <th>EDITORA</th>
        <th>Nº DA EDIÇÃO</th>
        <th>ESTOQUE</th>
        <th>SINOPSE</th>
    </tr>

<?php
    include('conexao.php');
    $genero = $_POST ['genero'];

    $sql = "SELECT * FROM livro genero_livro WHERE genero_livro = '$genero'";
    $result = $mysqli->query($sql);

    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['id_livro']."</td>";
        echo "<td><img src='".$row['url_imagem_livro']."'></td>";
        echo "<td>".$row['nome_livro']."</td>";
        echo "<td>".$row['id_autor']."</td>";
        echo "<td>".$row['genero_livro']."</td>";
        echo "<td>".$row['editora_livro']."</td>";
        echo "<td>".$row['num_edicao_livro']."</td>";
        echo "<td>".$row['estoque_livro']."</td>";
        echo "<td>".$row['sinopse_livro']."</td>";
        echo "<tr>";
    }
?>
    </table>
</body>
</html>