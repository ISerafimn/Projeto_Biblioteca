<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
                <a href="contato.html">CONTATO</a>
            </li>
            <li class="dropdown">
                <a href="usuario_login.html" style="width: 125px; text-align: center;">ENTRAR</a>
                <div class="dp-menu">
                    <a href="usuario_login.html">Login</a>
                    <a href="usuario_cadastro.html">Cadastra-se</a>
                </div>
            </li>
            <li>
                <a href="index.php">HOME</a>
            </li>
        </ul> 
    </nav>

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
        </tr>

        <?php
        include('php/conexao.php');

        $sql = mysqli_query($mysqli, "SELECT  *   FROM  livro");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_livro = $result['id_livro'];
                $nome_livro = $result['nome_livro'];
                $id_autor = $result['id_autor'];
                $genero_livro = $result['genero_livro'];
                $editora_livro = $result['editora_livro'];
                $num_edicao_livro = $result['num_edicao_livro'];
                $estoque_livro = $result['estoque_livro'];
                $sinopse_livro = $result['sinopse_livro'];
                $url_imagem_livro = $result['url_imagem_livro'];

                echo "<tr>";
                echo "<td>".$id_livro."</td>";
                echo "<td><img src='".$url_imagem_livro."'></td>";
                echo "<td>".$nome_livro."</td>";

                    $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row['nome_autor']."</td>";
                    }
                    
                echo "<td>".$genero_livro."</td>";
                echo "<td>".$editora_livro."</td>";
                echo "<td>".$num_edicao_livro."</td>";
                echo "<td>".$estoque_livro."</td>";
                echo "<td>".$sinopse_livro."</td>";
                echo "</tr>";
                
            };
            
        ?>
    </table>
</body>
</html>