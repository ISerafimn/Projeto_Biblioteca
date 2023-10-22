<div class="menu_gerenciar">
    <h2>Gerenciar Movimentação</h2><hr>
    <section>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="movimentacao_lista.php">Movimentação</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Consultar Situação</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_consultar_situacao.php" class="form_gerenciar">
                    <input name="consultar" value="id_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_consultar_situacao.php" class="form_gerenciar">
                    <input name="consultar" value="nome_usuario" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <a href="consultar_por_status.php">Consultar por Status</a>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Atualizar Saída</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_atualizar_movimentacao.php" class="form_gerenciar">
                    <input name="atualizar_por" value="id_usuario" style="display: none;">
                    <input name="caminho" value="saida" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_atualizar_movimentacao.php" class="form_gerenciar">
                    <input name="atualizar_por" value="nome_usuario" style="display: none;">
                    <input name="caminho" value="saida" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
        <div class="gerenciar_cont">
            <div class="gerenciar_titulo_menu">
                <p style="padding-right: 8px;">Atualizar Entrada</p><i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="responder">
                <form method="post" action="php/variaveis_atualizar_movimentacao.php" class="form_gerenciar">
                    <input name="atualizar_por" value="id_usuario" style="display: none;">
                    <input name="caminho" value="entrada" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Id</button>
                </form>
                <form method="post" action="php/variaveis_atualizar_movimentacao.php" class="form_gerenciar">
                    <input name="atualizar_por" value="nome_usuario" style="display: none;">
                    <input name="caminho" value="entrada" style="display: none;">
                    <button type="submit" name="Submit" class="button_gerenciar">Nome</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="../../js/menu_gerenciar.js"></script>