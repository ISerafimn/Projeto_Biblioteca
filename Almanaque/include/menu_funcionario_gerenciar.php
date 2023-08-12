<nav>
    <ul>
        <li class="dropdown">
            <a href="../generos_literario.php">GÊNEROS LITERARIOS</a>
                <div class="dp-menu">
                    <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM genero";
                        $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo    "<form method='post' action='../lista_genero.php'>
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
            <a href="../livros.php">LIVROS</a>
        </li>
        <li>
            <a href="../contato.php">CONTATO</a>
        </li>
        <li class="dropdown">
            <a href="../gerenciar.php" style="width: 150px; text-align: center;">GERENCIAR</a>
            <div class="dp-menu" style="width: 150px; text-align: center;">
                <a href="../gerenciar_livro/livro_lista.php">Livros</a>
                <a href="../gerenciar_autor/autor_lista.php">Autor</a>
                <a href="../gerenciar_usuario/usuario_lista.php">Usuarios</a>
                <a href="../movimentacao_lista.php">Movimentação</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="../perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
        <div class="dp-menu" style="width: 125px; text-align: center;">
            <a href="../perfil.php">Meu Perfil</a>
            <a href="../../php/logout.php">Sair</a>
        </div>
        </li>
        <li>
            <a href="../index.php">HOME</a>
        </li>
    </ul> 
</nav>