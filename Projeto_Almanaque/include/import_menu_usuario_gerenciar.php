<div class="menu_gerenciar">
    <h2>Gerenciar Usuarios</h2><hr>
    <section>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="usuario_lista.php">Usuarios</a>
            </div>
        </div>

        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Consultar</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_usuario.php" class="form_gerenciar">
                    <input name="consultar" value="id_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_usuario.php" class="form_gerenciar">
                    <input name="consultar" value="nome_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>

        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="adicionar_usuario.php">Adicionar</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Atualizar</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_atualizar_usuario.php" class="form_gerenciar">
                    <input name="atualizar" value="id_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_atualizar_usuario.php" class="form_gerenciar">
                    <input name="atualizar" value="nome_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Excluir</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_excluir_usuario.php" class="form_gerenciar">
                    <input name="excluir" value="id_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_excluir_usuario.php" class="form_gerenciar">
                    <input name="excluir" value="nome_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="../../js/menu_gerenciar.js"></script>