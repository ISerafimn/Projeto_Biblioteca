<?php
include('conexao.php');
$genero = $_POST ['genero'];
$sql = "SELECT * FROM livros livros_id WHERE genero_id = '$genero'";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <nav>
        <ul>
            <li class="dropdown">
                <a href="../generos_literario.html">GÊNEROS LITERARIOS</a>
                <div class="dp-menu">
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="1">
                        <button type="submit" name="Submit">Romance</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="2">
                        <button type="submit" name="Submit">Fantasia</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="3">
                        <button type="submit" name="Submit">Poesia</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="4">
                        <button type="submit" name="Submit">Romance</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="5">
                        <button type="submit" name="Submit">Conto</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="6">
                        <button type="submit" name="Submit">Terror</button>
                    </form>
                    <form method="post" action="lista_genero.php">
                        <input name="genero" value="7">
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
        <th>Nome</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>N° da Edição</th>
    </tr>

<?php
    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['livros_id']."</td>";
        echo "<td>".$row['livros_nome']."</td>";
        echo "<td>".$row['autor_id']."</td>";
        echo "<td>".$row['livro_editoria']."</td>";
        echo "<td>".$row['livro_num_edicao']."</td>";
        echo "<tr>";
    }
?>
    </table>
</body>
</html>