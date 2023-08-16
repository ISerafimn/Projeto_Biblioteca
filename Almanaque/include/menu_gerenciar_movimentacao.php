<nav>
    <ul>
        <li>
            <a href="movimentacao_lista.php" style="width: 170px; text-align: center;">LISTA MOVIMENTAÇÃO</a>
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
        </li>
        <li class="dropdown">
            <a href="atualizar_livro_por.php" style="width: 250px; text-align: center;">ATUALIZAR MOVIMENTAÇÃO SAÍDA por:</a>
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
            <a href="atualizar_livro_por.php" style="width: 250px; text-align: center;">ATUALIZAR MOVIMENTAÇÃO ENTRADA por:</a>
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
    </ul>
</nav>