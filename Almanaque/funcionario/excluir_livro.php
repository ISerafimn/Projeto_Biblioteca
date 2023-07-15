<?php
    include('../php/conexao.php');
    session_start();
    $excluir = $_SESSION['excluir'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        img{
            width: 300px;
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
                    <a href="livros.php">LIVROS</a>
                </li>
                <li>
                    <a href="contato.html">CONTATO</a>
                </li>
                <li class="dropdown">
                <a href="gerenciar.html" style="width: 150px; text-align: center;">GERENCIAR</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <a href="livro_lista.php">Livros</a>
                        <a href="gerenciar_usuario/usuario_lista.php">Usuarios</a>
                        <a href="movimentacao_lista.php">Movimentação</a>
                    </div>
                </li>
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                    <div class="dp-menu" style="width: 125px; text-align: center;">
                        <a href="perfil.php">Meu Perfil</a>
                        <a href="../php/logout.php">Sair</a>
                    </div>
                </li>
            </ul> 
        </nav>
    </div>

    <br>

    <nav>
        <ul>
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
                    <a href="#" style="width: 150px; text-align: center;">Excluir LIVRO por:</a>
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
    
    <p  style="text-align: center;">Digite para Consultar</p>

    <form action="#" method="post" style="text-align: center;">
        <input type="text" name="valor">
        <button type="submit" style="background-color: #1f1919; color: white">enviar</button>
    </form>
    <br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
    ?>
        <table border="1" style="width:80%; margin: auto;">
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
        if($excluir == "id_livro"){

            include('../php/conexao.php');

            $sql = "SELECT * FROM livro id_livro WHERE id_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['id_livro']."</td>";
                echo "<td><img src='".$row['url_imagem_livro']."'></td>";
                echo "<td>".$row['nome_livro']."</td>";

                $id_autor = $row['id_autor'];

                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row2['nome_autor']."</td>";
                    }

                echo "<td>".$row['genero_livro']."</td>";
                echo "<td>".$row['editora_livro']."</td>";
                echo "<td>".$row['num_edicao_livro']."</td>";
                echo "<td>".$row['estoque_livro']."</td>";
                echo "<td>".$row['sinopse_livro']."</td>";
                echo "<tr></table>";

                echo "<p>Excluir esse Livro?</p>
                        <form action='excluindo_livro.php' method='post'>
                            <input type='text' name='excluindo' value='".$row['id_livro']."' style='display: none;'>
                            <input type='text' name='valor' value='id_livro' style='display: none;'>
                            <button type='submit'>Sim</button>
                        </form>
                        <form action='index.php'>
                            <button type='submit'>Não</button>
                        </form>";
                

            }
        }
        else{
            include('../php/conexao.php');

            $sql = "SELECT * FROM livro id_livro WHERE nome_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['id_livro']."</td>";
                echo "<td><img src='".$row['url_imagem_livro']."'></td>";
                echo "<td>".$row['nome_livro']."</td>";

                $id_autor = $row['id_autor'];

                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row2['nome_autor']."</td>";
                    }

                echo "<td>".$row['genero_livro']."</td>";
                echo "<td>".$row['editora_livro']."</td>";
                echo "<td>".$row['num_edicao_livro']."</td>";
                echo "<td>".$row['estoque_livro']."</td>";
                echo "<td>".$row['sinopse_livro']."</td>";
                echo "<tr></table>";

                echo "<p>Excluir esse Livro?</p>
                <form action='excluindo_livro.php' method='post'>
                    <input type='text' name='excluindo' value='".$row['nome_livro']."' style='display: none;'>
                    <input type='text' name='valor' value='nome_livro' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='index.php'>
                    <button type='submit'>Não</button>
                </form>";
            }
        }
    }
    ?>
</body>
</html>