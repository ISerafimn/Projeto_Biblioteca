<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Adicionar Usuário</title>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_usuario_gerenciar.php'); ?>
    
    <br>

    <section class="containers">
      <form  method="post" action="php/variaveis_adicionar.php" class="form">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Adicionar Usuário</h1>
        </div>

        <div class="input-box">
          <label>Nome Completo</label>
          <input name="nome_usuario" type="text" maxlenght="50" placeholder="Digite o nome do usuário" required>
        </div>

        <div class="input-box">
          <label>CPF</label>
          <input name="cpf_usuario" type="number" minlength="11" maxlenght="11" placeholder="Digite o CPF do usuário" role="none" required>
        </div>

        <div class="input-box">
          <label>Email</label>
          <input name="email_usuario" type="email" maxlenght="50" placeholder="Digite o E-mail do usuario" required>
        </div>

        <div class="input-box">
          <label>Senha</label>
          <input name="senha_usuario" type="password" maxlenght="50" placeholder="Digite a senha do usuario" required>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Telefone</label>
            <input name="telefone_usuario" type="number"  minlength="11" maxlenght="11" placeholder="Digite o telefone do usuario" required>
          </div>
          <div class="input-box">
            <label>Data de nascimento</label>
            <input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário" required>
          </div>
        </div>
        <div class="gender-box">
          <h3>Sexo</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Masculino</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Feminino</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">Outro</label>
            </div>
          </div>
        </div>
        <div class="input-box">
            <label>Endereço</label>
            <input name="endereco_usuario" type="text" maxlenght="50" placeholder="Digite o endereço do usuario" required>
          </div>
        <button type="submit">Cadastrar</button>
      </form>
    </section>

    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>