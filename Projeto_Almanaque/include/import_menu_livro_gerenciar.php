<div class="menu_gerenciar">
    <h2>Gerenciar Livros</h2><hr>
    <section>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="livro_lista.php">Livros</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Consultar</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="variaveis_livro.php" class="form_gerenciar">
                    <input name="consultar" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="variaveis_livro.php" class="form_gerenciar">
                    <input name="consultar" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
                <form method="post" action="variaveis_livro.php" class="form_gerenciar">
                    <input name="consultar" value="id_autor" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Autor</button>
                </form>
                <form method="post" action="variaveis_livro.php" class="form_gerenciar">
                    <input name="consultar" value="editora_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Editora</button>
                </form>
                <form method="post" action="variaveis_livro.php" class="form_gerenciar">
                    <input name="consultar" value="genero_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Gênero</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="adicionar_livro.php">Adicionar</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Atualizar</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="variaveis_atualizar_livro.php" class="form_gerenciar">
                    <input name="atualizar" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="variaveis_atualizar_livro.php" class="form_gerenciar">
                    <input name="atualizar" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Excluir</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="variaveis_excluir_livro.php" class="form_gerenciar">
                    <input name="excluir" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="variaveis_excluir_livro.php" class="form_gerenciar">
                    <input name="excluir" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="../../js/menu_gerenciar.js"></script>