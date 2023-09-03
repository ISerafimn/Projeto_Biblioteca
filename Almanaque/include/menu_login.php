<nav>
    <ul>
        <li class="dropdown">
            <a href="generos_literario.php">GÊNEROS LITERARIOS</a>
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
        </li>
        <li>
            <a href="index.php">HOME</a>
        </li>
        <li>
            <form action=resultado_pesquisa.php>
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise Aqui!" type="text">
                <button type="submit">Buscar</button>
            </form>
        </li>
    </ul> 
</nav>