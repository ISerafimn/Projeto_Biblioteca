    <?php
    session_start();
    $var = $_SESSION['var3'];
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
    <br><br><br><br><br>

    <table border="1" style="width:50%; margin: auto;">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CARGO</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>CPF</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  funcionario WHERE funcionario_cpf='$cpf'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id = $result['funcionario_id'];
                $nome = $result['funcionario_nome'];
                $cargo = $result['funcionario_cargo'];
                $telefone = $result['funcionario_telefone'];
                $email = $result['funcionario_email'];
                $cpf = $result['funcionario_cpf'];
                echo "<tr>";
                echo "<td>".$id."</td>";
                echo "<td>".$nome."</td>";
                echo "<td>".$cargo."</td>";
                echo "<td>".$telefone."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$cpf."</td>";
                echo "<tr>";
            };
            
            $_SESSION['var2'] = $id;
        ?>

    </table>
    
    <br>
    
        <ul>
        <li style="text-align: center;"><a href="atualizar_usuario.html">Atualizar os Dados</a></li>
        <li style="text-align: center;"><a href="excluir_funcionario.html">Excluir o Usuario</a></li>
        </ul>
    </div>
    
    <br><br><br><br><br>
    
   <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Estante Digital</h1>
                <p>O mundo literario</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="istagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
                <ul class="footer-list">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Literatura</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Audioboks</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">E-book</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Produtos</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Apps</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Downloand</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Cloud</a>
                    </li>
                </ul>

                <div id="footer_cad">
                    <h3>Cadastre-se</h3>
                    <p>para obter a melhor experiencia literaria da sua vida!.</p>
                    <p>Entre com seu email e sera notoficado diariamente com nossas ultimas novidades</p>

               <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
            <p style="text-align: center; padding-bottom: 10px;"> &#169 2023 direito reservado</p>
    </footer>
</body>
</html>