<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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

    <br><br><br><br><br>

    <h1>GÊNEROS LITERARIOS</h1>
    
    <form name="Cadastro Usuario" method="post" action="php/variaveis.php">
        <h1>Cadastro do Usuário</h1>
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_usuario" type="text" maxlenght="50" placeholder="Digite o nome do usuário" required></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário" required></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf_usuario" type="number" minlength="11" maxlenght="11" placeholder="Digite o CPF do usuário" role="none" required></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email_usuario" type="email" maxlenght="50" placeholder="Digite o E-mail do usuario" required></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input name="endereco_usuario" type="text" maxlenght="50" placeholder="Digite o endereço do usuario" required></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone_usuario" type="number"  minlength="11" maxlenght="11" placeholder="Digite o telefone do usuario" required></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha_usuario" type="number" minlength="8" maxlength="20" placeholder="Digite o telefone do usuario" required></td>
            </tr>
        </table>
            <br>
        <button type="submit" name="Submit">Concluir Cadastro</button>
    </form>
    
    <br><br><br><br><br><br>


    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
</body>
</html>