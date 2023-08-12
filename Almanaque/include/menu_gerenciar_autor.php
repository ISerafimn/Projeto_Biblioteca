<nav>
    <ul>
        <li>
            <a href="autor_lista.php" style="width: 150px; text-align: center;">LISTA AUTOR</a>
        </li>
        <li>
            <a href="adicionar_autor.php" style="width: 150px; text-align: center;">Adicionar AUTOR</a>
        </li>
        <li class="dropdown">
            <a href="atualizar_autor_por.php" style="width: 150px; text-align: center;">atualizar AUTOR por:</a>
            <div class="dp-menu" style="width: 150px; text-align: center;">
                <form method="post" action="variaveis_autor_livro.php">
                    <input name="atualizar_autor" value="id_autor" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_autor_livro.php">
                    <input name="atualizar_autor" value="nome_autor" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
        <li class="dropdown">
            <a href="excluir_autor_por.php" style="width: 150px; text-align: center;">Excluir AUTOR por:</a>
            <div class="dp-menu" style="width: 150px; text-align: center;">
                <form method="post" action="variaveis_excluir_autor.php">
                    <input name="excluir_autor" value="id_autor" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_excluir_autor.php">
                    <input name="excluir_autor" value="nome_autor" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
    </ul>
</nav>