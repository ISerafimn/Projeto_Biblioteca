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
            <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
            <div class="dp-menu" style="width: 125px; text-align: center;">
                <a href="perfil.php">Meu Perfil</a>
                <a href="meus_livros.php">Meus Livros</a>
                <a href="../php/logout.php">Sair</a>
            </div>
        </li>
        <li>
            <a href="index.php">HOME</a>
        </li>
        </li>
    </ul> 
</nav>