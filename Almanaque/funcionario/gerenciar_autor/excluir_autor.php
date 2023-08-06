<?php
    include('../../php/conexao.php');
    session_start();
    $excluir_autor = $_SESSION['excluir_autor'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="shortcut icon" href="../../imagem/" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        img{
            width: 300px;
        }
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
                        <a href="../gerenciar_livro/livro_lista.php">Livros</a>
                        <a href="autor_lista.php">Autor</a>
                        <a href="../gerenciar_usuario/usuario_lista.php">Usuarios</a>
                        <a href="../gerenciar_movimentacao/movimentacao_lista.php">Movimentação</a>
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
                <a href="autor_lista.php" style="width: 150px; text-align: center;">LISTA AUTOR</a>
            </li>
            <li>
                <a href="adicionar_autor.html" style="width: 150px; text-align: center;">Adicionar AUTOR</a>
            </li>
            <li class="dropdown">
                <a href="atualizar_autor_por.html" style="width: 150px; text-align: center;">atualizar AUTOR por:</a>
                <div class="dp-menu" style="width: 150px; text-align: center;">
                    <form method="post" action="variaveis_autor_livro.php">
                        <input name="atualizar_autor" value="id_autor" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_autor_livro.php">
                        <input name="atualizar_autor" value="nome_autor" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                </div>
            </li>
            <li class="dropdown">
                <a href="excluir_autor_por.html" style="width: 150px; text-align: center;">Excluir AUTOR por:</a>
                <div class="dp-menu" style="width: 150px; text-align: center;">
                    <form method="post" action="variaveis_excluir_autor.php">
                        <input name="excluir_autor" value="id_autor" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_excluir_autor.php">
                        <input name="excluir_autor" value="nome_autor" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <br>
    
    <p  style="text-align: center;">Digite para selecionar o livro que será Atualizado</p>

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
            <th>Nome</th>
            <th>Nacionalidade</th>
            <th>Data de Nascimento</th>
            <th>Data de Falecimento</th>
        </tr>
        
    <?php
        if($excluir_autor == "id_autor"){

            include('../php/conexao.php');

            $sql = "SELECT * FROM autor id_autor WHERE id_autor = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_autor = $row['id_autor'];
                echo "<tr>";
                echo "<td>".$id_autor."</td>";
                echo "<td>".$row['nome_autor']."</td>";
                echo "<td>".$row['pais_autor']."</td>";
                echo "<td>".$row['nascimento_autor']."</td>";
                echo "<td>".$row['falecimento_autor']."</td>";
                echo "<tr></table>";

    ?>

    <br>
                                
    <?php
                echo "<p>Excluir esse Autor?</p>
                <form action='excluindo_autor.php' method='post'>
                    <input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>
                    <input type='text' name='valor' value='id_autor' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='lista_autor.php'>
                    <button type='submit'>Não</button>
                </form>";
            }
        }
        else{
            include('../php/conexao.php');

            $sql = "SELECT * FROM autor id_autor WHERE nome_autor = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_autor = $row['id_autor'];
                echo "<tr>";
                echo "<td>".$id_autor."</td>";
                echo "<td>".$row['nome_autor']."</td>";
                echo "<td>".$row['pais_autor']."</td>";
                echo "<td>".$row['nascimento_autor']."</td>";
                echo "<td>".$row['falecimento_autor']."</td>";
                echo "<tr></table>";
    ?>
    
    <br>
                                
    <?php
                echo "<p>Excluir esse Autor?</p>
                <form action='excluindo_autor.php' method='post'>
                    <input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>
                    <input type='text' name='valor' value='id_autor' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='lista_autor.php'>
                    <button type='submit'>Não</button>
                </form>";
            }
        }
    }
    ?>
</body>
</html>