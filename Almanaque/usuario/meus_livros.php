<?php
    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    
    include('../php/conexao.php');
    
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Livros</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="generos_literario.html">GÊNEROS LITERARIOS</a>
                    <div class="dp-menu">
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Romance">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Fantasia">
                            <button type="submit" name="Submit">Fantasia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Poesia">
                            <button type="submit" name="Submit">Poesia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Ficcao">
                            <button type="submit" name="Submit">Ficção</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Conto">
                            <button type="submit" name="Submit">Conto</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Terror">
                            <button type="submit" name="Submit">Terror</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="Aventura">
                            <button type="submit" name="Submit">Ação e Aventura</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a href="livros.php">LIVROS</a>
                </li>
                <li>
                    <a href="contato.html">CONTATO</a>
                </li>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                    <div class="dp-menu" style="width: 125px; text-align: center;">
                        <a href="perfil.php">Meu Perfil</a>
                        <a href="meus_livros.php">Meus Livros</a>
                        <a href="../php/logout.php">Sair</a>
                    </div>
                </li>
            </ul> 
        </nav>
    </div>

    <br>

    <table border="1" style="width:90%; margin: auto;">
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
            <th>STATUS</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_livro = $result['id_livro'];
                $id_status_movimentacao = $result['id_status_movimentacao'];
                
                    $sql2 = mysqli_query($mysqli, "SELECT * FROM livro WHERE id_livro = '$id_livro'");
                    while ($result2 = mysqli_fetch_array($sql2))
                    {

                    $id_livro = $result2['id_livro'];
                    $nome_livro = $result2['nome_livro'];
                    $id_autor = $result2['id_autor'];

                        $sql3 = mysqli_query($mysqli, "SELECT * FROM autor WHERE id_autor = '$id_autor'");
                        while ($result3 = mysqli_fetch_array($sql3))
                        {

                        $nome_autor = $result3['nome_autor'];

                        }

                    $genero_livro = $result2['genero_livro'];
                    $editora_livro = $result2['editora_livro'];
                    $num_edicao_livro = $result2['num_edicao_livro'];
                    $estoque_livro = $result2['estoque_livro'];
                    $sinopse_livro = $result2['sinopse_livro'];
                    $url_imagem_livro = $result2['url_imagem_livro'];

                    }

                    $sql4 = mysqli_query($mysqli, "SELECT * FROM status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'");
                    while ($result4 = mysqli_fetch_array($sql4))
                    {

                        $nome_status_movimentacao = $result4['nome_status_movimentacao'];

                    }

                echo "<tr>";
                echo "<td>".$id_livro."</td>";
                echo "<td><img src='".$url_imagem_livro."'></td>";
                echo "<td>".$nome_livro."</td>";
                echo "<td>".$nome_autor."</td>";
                echo "<td>".$genero_livro."</td>";
                echo "<td>".$editora_livro."</td>";
                echo "<td>".$num_edicao_livro."</td>";
                echo "<td>".$estoque_livro."</td>";
                echo "<td>".$sinopse_livro."</td>";
                echo "<td>".$nome_status_movimentacao."</td>";
                echo "</tr>";
            };
        ?>
    </table>
</body>
</html>