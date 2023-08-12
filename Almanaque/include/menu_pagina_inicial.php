<nav>
    <ul>
        <li class="dropdown">
            <a href="generos_literario.php">GÊNEROS LITERARIOS</a>
                <div class="dp-menu">
                    <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM genero";
                        $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo    "<form method='post' action='lista_genero.php'>
                                                <input name='id_genero' value='".$row['id_genero']."' style='display: none;'>
                                                <button type='submit' name='Submit'>
                                                    ".$row['nome_genero']."
                                                </button>
                                            </form>";
                                }
                    ?>
                </div>
        </li>
        <li>
            <a href="livros.php">LIVROS</a>
        </li>
        <li>
            <a href="contato.php">CONTATO</a>
        </li>
        <li class="dropdown">
            <a href="usuario_login.php" style="width: 125px; text-align: center;">ENTRAR</a>
                <div class="dp-menu">
                    <a href="usuario_login.php">Login</a>
                    <a href="usuario_cadastro.php">Cadastra-se</a>
                </div>
        <li>
            <a href="index.php">HOME</a>
        </li>
        </li>
    </ul> 
</nav>