<div class="menu_gerenciar">
    <h2>Gerenciar Autores</h2><hr>
    <section>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="autor_lista.php">Autores</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="adicionar_autor.php">Adicionar</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Atualizar</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_autor_livro.php" class="form_gerenciar">
                    <input name="atualizar_autor" value="id_autor" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_autor_livro.php" class="form_gerenciar">
                    <input name="atualizar_autor" value="nome_autor" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Excluir</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_excluir_autor.php" class="form_gerenciar">
                    <input name="excluir_autor" value="id_autor" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_excluir_autor.php" class="form_gerenciar">
                    <input name="excluir_autor" value="nome_autor" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="../../js/menu_gerenciar.js"></script>