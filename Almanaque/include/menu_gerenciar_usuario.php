<nav>
    <ul>
        <li>
            <a href="usuario_lista.php" style="width: 150px; text-align: center;">LISTA USUÁRIO</a>
        </li>
        <li class="dropdown">
            <a href="consultar_por.php" style="width: 150px; text-align: center;">CONSULTAR por:</a>
        <div class="dp-menu">
            <form method="post" action="variaveis_usuario.php">
                <input name="consultar" value="id_usuario" style="display: none;">
                <button type="submit" name="Submit">Id</button>
            </form>
            <form method="post" action="variaveis_usuario.php">
                <input name="consultar" value="nome_usuario" style="display: none;">
                <button type="submit" name="Submit">Nome</button>
            </form>
        </div>
        </li>
        <li>
            <a href="adicionar_usuario.php" style="width: 150px; text-align: center;">Adicionar USUÁRIO</a>
        </li>
        <li class="dropdown">
            <a href="atualizar_usuario_por.php" style="width: 170px; text-align: center;">Atualizar USUÁRIO por:</a>
        <div class="dp-menu" style="width: 170px; text-align: center;">
            <form method="post" action="variaveis_atualizar_usuario.php">
                <input name="atualizar" value="id_usuario" style="display: none;">
                <button type="submit" name="Submit" style="width: 170px;">Id</button>
            </form>
            <form method="post" action="variaveis_atualizar_usuario.php">
                <input name="atualizar" value="nome_usuario" style="display: none;">
                <button type="submit" name="Submit" style="width: 170px;">Nome</button>
            </form>
        </div>
        </li>
        <li class="dropdown">
            <a href="excluir_usuario_por.php" style="width: 170px; text-align: center;">Excluir USUÁRIO por:</a>
        <div class="dp-menu" style="width: 170px; text-align: center;">
            <form method="post" action="variaveis_excluir_usuario.php">
                <input name="excluir" value="id_usuario" style="display: none;">
                <button type="submit" name="Submit" style="width: 170px;">Id</button>
            </form>
            <form method="post" action="variaveis_excluir_usuario.php">
                <input name="excluir" value="nome_usuario" style="display: none;">
                <button type="submit" name="Submit" style="width: 170px;">Nome</button>
            </form>
        </div>
        </li>
    </ul>
</nav>