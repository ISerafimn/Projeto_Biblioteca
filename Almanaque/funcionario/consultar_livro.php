<?php
    include('../php/conexao.php');
    session_start();
    $consultar = $_SESSION['consultar'];
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
                    <a href="contato.html">CONTATO</a>
                </li>
                <li class="dropdown">
                <a href="gerenciar.html" style="width: 150px; text-align: center;">GERENCIAR</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <a href="livro_lista.php">Livros</a>
                        <a href="usuario_lista.php">Usuarios</a>
                        <a href="movimentacao_lista.php">Movimentação</a>
                    </div>
                </li>
                <li>
                    <a href="index.html">HOME</a>
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
                        <input name="consultar" value="livros_id" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="livros_nome" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="autor_id" style="display: none;">
                        <button type="submit" name="Submit">Autor</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="livro_editoria" style="display: none;">
                        <button type="submit" name="Submit">Editoria</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="genero_id" style="display: none;">
                        <button type="submit" name="Submit">Genero</button>
                    </form>
                    <form method="post" action="variaveis_livro.php">
                        <input name="consultar" value="livro_num_edicao" style="display: none;">
                        <button type="submit" name="Submit">Edição</button>
                    </form>
                </div>
            </li>
            <li>
                <a href="adicionar_livro.html" style="width: 150px; text-align: center;">Adicionar LIVRO</a>
            </li>
            <li class="dropdown">
                <a href="atualizar_livro_por.html" style="width: 150px; text-align: center;">ATUALIZAR LIVRO por:</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <a href="php/atualizar_livro_id.php">Id</a>
                        <a href="php/atualizar_lista_nome.php">Nome</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" style="width: 150px; text-align: center;">Excluir LIVRO por:</a>
                    <div class="dp-menu" style="width: 150px; text-align: center;">
                        <a href="excluir_livro.php">Id</a>
                        <a href="excluir_livro.php">Nome</a>
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
        <table border="1" style="width:50%; margin: auto;">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AUTOR</th>
                <th>EDITORA</th>
                <th>GENERO</th>
                <th>EDIÇÃO</th>
            </tr>
    <?php
        if($consultar == "livros_id"){

            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE livros_id = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
        elseif($consultar == "livros_nome"){
            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE livros_nome = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
        elseif($consultar == "autor_id"){
            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE autor_id = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
        elseif($consultar == "livro_editoria"){
            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE livro_editoria = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
        elseif($consultar == "genero_id"){
            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE genero_id = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
        else{
            include('../php/conexao.php');

            $sql = "SELECT * FROM livros livros_id WHERE livro_num_edicao = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['livros_id']."</td>";
                echo "<td>".$row['livros_nome']."</td>";
                echo "<td>".$row['autor_id']."</td>";
                echo "<td>".$row['livro_editoria']."</td>";
                echo "<td>".$row['genero_id']."</td>";
                echo "<td>".$row['livro_num_edicao']."</td>";
                echo "<tr>";
            }
        }
    }
    ?>
    </table>
</body>
</html>