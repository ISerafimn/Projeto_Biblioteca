    <?php
    session_start();
    $var = $_SESSION['variavel'];
    $cpf = $var;
    
    include('../php/conexao.php');
    
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
    <link rel="stylesheet" href="../design/login-cadastro.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        .item img{
            width: 175px;
            height: 250px;
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
                            <input name="genero" value="1">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="2">
                            <button type="submit" name="Submit">Fantasia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="3">
                            <button type="submit" name="Submit">Poesia</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="4">
                            <button type="submit" name="Submit">Romance</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="5">
                            <button type="submit" name="Submit">Conto</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="6">
                            <button type="submit" name="Submit">Terror</button>
                        </form>
                        <form method="post" action="php/lista_genero.php">
                            <input name="genero" value="7">
                            <button type="submit" name="Submit">Ação e Aventura</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a href="contato.html">CONTATO</a>
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

    <br><br><br><br><br>

    <table border="1" style="width:50%; margin: auto;">
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>NASCIMENTO</th>
            <th>CPF</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM    usuario WHERE usuario_cpf='$cpf'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id = $result['usuario_id'];
                $nome = $result['usuario_nome'];
                $email = $result['usuario_email'];
                $nascimento = $result['usuario_nascimento'];
                $cpf = $result['usuario_cpf'];
                $endereco = $result['usuario_endereco'];
                $telefone = $result['usuario_telefone'];
                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$nascimento."</td>";
                echo "<td>".$cpf."</td>";
                echo "<td>".$endereco."</td>";
                echo "<td>".$telefone."</td>";
                echo "<tr>";
            };
            
            $_SESSION['var2'] = $id;
        ?>

    </table>
    
    <br>
    
    <ul>
        <li style="text-align: center;"><a href="atualizar_usuario.html">Atualizar os Dados</a></li>
    </ul>
    
    <br><br><br><br><br>
    
</body>
</html>