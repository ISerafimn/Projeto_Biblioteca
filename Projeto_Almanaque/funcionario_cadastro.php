<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

<br><br><br><br><br><br>

    <section class="containers">
    <form   method="post" action="php/variaveis_funcionario.php" class="form">

        <div class="input-box">
        <h1 style="color: black; text-align: center;">Cadastro Funcionario</h1>
        </div>

        <div class="input-box">
        <label>Nome Completo</label>
        <input name="email_funcionario" type="email" placeholder="Digite o nome do funcionario" required>
        </div>

        <div class="input-box">
        <label>CPF</label>
        <input name="cpf_funcionario" type="number" placeholder="Digite o CPF do funcionario" required>
        </div>

        <div class="input-box">
        <label>Email</label>
        <input name="email_funcionario" type="email" placeholder="Digite o Email do funcionario" required>
        </div>

        <div class="column">
        <div class="input-box">
            <label>Data de nascimento</label>
            <input name="data_funcionario" type="date" placeholder="Digite o telefone do funcionario" required>
        </div>
        </div>
        <div class="input-box">
            <label>Senha</label>
            <input name="senha_funcionario" type="password" placeholder="Digite a senha funcionario" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
    </section>

    <br><br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>