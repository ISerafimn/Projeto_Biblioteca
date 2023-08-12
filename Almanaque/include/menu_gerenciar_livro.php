<nav>
    <ul>
        <li>
            <a href="livro_lista.php" style="width: 150px; text-align: center;">LISTA LIVROS</a>
        </li>
        <li class="dropdown">
            <a href="consultar_por.php" style="width: 150px; text-align: center;">CONSULTAR por:</a>
        <div class="dp-menu">
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="id_livro" style="display: none;">
                <button type="submit" name="Submit">Id</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="nome_livro" style="display: none;">
                <button type="submit" name="Submit">Nome</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="id_autor" style="display: none;">
                <button type="submit" name="Submit">Autor</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="editora_livro" style="display: none;">
                <button type="submit" name="Submit">Editora</button>
            </form>
                <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="genero_livro" style="display: none;">
                <button type="submit" name="Submit">Gênero</button>
            </form>
        </div>
        </li>
        <li>
            <a href="adicionar_livro.php" style="width: 150px; text-align: center;">Adicionar LIVRO</a>
        </li>
        <li class="dropdown">
            <a href="atualizar_livro_por.php" style="width: 150px; text-align: center;">ATUALIZAR LIVRO por:</a>
            <div class="dp-menu" style="width: 150px; text-align: center;">
                <form method="post" action="variaveis_atualizar_livro.php">
                    <input name="atualizar" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_atualizar_livro.php">
                    <input name="atualizar" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
        <li class="dropdown">
            <a href="excluir_livro_por.php" style="width: 150px; text-align: center;">Excluir LIVRO por:</a>
            <div class="dp-menu" style="width: 150px; text-align: center;">
                <form method="post" action="variaveis_excluir_livro.php">
                    <input name="excluir" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_excluir_livro.php">
                    <input name="excluir" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
    </ul>
</nav>