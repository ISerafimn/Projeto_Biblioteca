<?php
    include('../php/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
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
                        <a href="usuario_lista.php">Usuarios</a>
                        <a href="../movimentacao_lista.php">Movimentação</a>
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
            <li class="dropdown">
                <a href="consultar_por.html" style="width: 150px; text-align: center;">CONSULTAR por:</a>
                <div class="dp-menu">
                    <form method="post" action="variaveis_usuario.php">
                        <input name="consultar" value="id_usuario" style="display: none;">
                        <button type="submit" name="Submit">Id</button>
                    </form>
                    <form method="post" action="variaveis_usuario.php">
                        <input name="consultar" value="nome_usuario" style="display: none;">
                        <button type="submit" name="Submit">Nome</button>
                    </form>
                </div>
            </li>
            <li>
                <a href="adicionar_usuario.html" style="width: 150px; text-align: center;">Adicionar USUÁRIO</a>
            </li>
            <li class="dropdown">
                <a href="atualizar_usuario_por.html" style="width: 170px; text-align: center;">Atualizar USUÁRIO por:</a>
                <div class="dp-menu" style="width: 170px; text-align: center;">
                    <form method="post" action="variaveis_atualizar_usuario.php">
                        <input name="atualizar" value="id_usuario" style="display: none;">
                        <button type="submit" name="Submit" style="width: 170px;">Id</button>
                    </form>
                    <form method="post" action="variaveis_atualizar_usuario.php">
                        <input name="atualizar" value="nome_usuario" style="display: none;">
                        <button type="submit" name="Submit" style="width: 170px;">Nome</button>
                    </form>
                </div>
            </li>
            <li class="dropdown">
                <a href="excluir_usuario_por.html" style="width: 170px; text-align: center;">Excluir USUÁRIO por:</a>
                <div class="dp-menu" style="width: 170px; text-align: center;">
                    <form method="post" action="variaveis_excluir_usuario.php">
                        <input name="excluir" value="id_usuario" style="display: none;">
                        <button type="submit" name="Submit" style="width: 170px;">Id</button>
                    </form>
                    <form method="post" action="variaveis_excluir_usuario.php">
                        <input name="excluir" value="nome_usuario" style="display: none;">
                        <button type="submit" name="Submit" style="width: 170px;">Nome</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    
    <br>

    <table border="1" style="width:90%; margin: auto;">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>DATA DE NASCIMENTO</th>
        <th>CPF</th>
        <th>ENDEREÇO</th>
        <th>TELEFONE</th>
    </tr>

    <?php
    include('../../php/conexao.php');

        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo "<tr>";
            echo "<td>".$id_usuario."</td>";
            echo "<td>".$nome_usuario."</td>";
            echo "<td>".$email_usuario."</td>";
            echo "<td>".$cpf_usuario."</td>";
            echo "<td>".$data_usuario."</td>";
            echo "<td>".$endereco_usuario."</td>";
            echo "<td>".$telefone_usuario."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>