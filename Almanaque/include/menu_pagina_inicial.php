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

<?php
if(isset($_SESSION['id_sessao'])){
    if($_SESSION['id_sessao'] == 1) {
        ?>
            <li class="dropdown">
                <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                <div class="dp-menu" style="width: 125px; text-align: center;">
                    <a href="perfil.php">Meu Perfil</a>
                    <a href="meus_livros.php">Meus Livros</a>
                    <a href="../php/logout.php">Sair</a>
                </div>
            </li>

        <?php
    }
    elseif($_SESSION['id_sessao'] == 2){
        ?>  
            <li class="dropdown">
                <a href="gerenciar.php" style="width: 150px; text-align: center;">GERENCIAR</a>
                <div class="dp-menu" style="width: 150px; text-align: center;">
                    <a href="gerenciar_livro/livro_lista.php">Livros</a>
                    <a href="gerenciar_autor/autor_lista.php">Autor</a>
                    <a href="gerenciar_usuario/usuario_lista.php">Usuarios</a>
                    <a href="gerenciar_movimentacao/movimentacao_lista.php">Movimentação</a>
                    <a href="gerenciar_genero/genero_lista.php">Gêneros</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                <div class="dp-menu" style="width: 125px; text-align: center;">
                    <a href="perfil.php">Meu Perfil</a>
                    <a href="../php/logout.php">Sair</a>
                </div>
            </li>

        <?php
    }
}
else{
    ?>
    <li class="dropdown">
        <a href="usuario_login.php" style="width: 125px; text-align: center;">ENTRAR</a>
        <div class="dp-menu">
            <a href="usuario_login.php">Login</a>
            <a href="usuario_cadastro.php">Cadastra-se</a>
        </div>

<?php
}
?>
        <li>
            <a href="index.php">HOME</a>
        </li>
        <li>
            <form action=resultado_pesquisa.php>
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise Aqui!" type="text">
                <button type="submit">Pesquisar</button>
            </form>
        </li>
    </ul> 
</nav>