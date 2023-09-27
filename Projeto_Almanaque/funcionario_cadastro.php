<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Sobre</title>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

    <h1>GÊNEROS LITERARIOS</h1>
    
    <h1>Cadastro do funcionario</h1>
    <form name="Cadastro Usuario" method="post" action="php/variaveis_funcionario.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_funcionario" type="text" placeholder="digite o nome do funcionario" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input name="email_funcionario" type="email" placeholder="Digite o cargo do funcionario" required></td>
            </tr>
            <tr>
                <td>Data de Nascimento:</td>
                <td><input name="data_funcionario" type="date" placeholder="digite o telefone do funcionario" required></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf_funcionario" type="number" placeholder="digite o E-mail do funcionario" required></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha_funcionario" type="password" placeholder="digite o cpf_usuario do funcionario" required></td>
            </tr>
        </table>
            <br>
        <button type="submit" name="Submit">Concluir Cadastro</button>
    </form>
    <br><a href="funcionario_login.php">Voltar</a>
    
    <br><br><br><br><br><br>


    <?php include('include/import_footer.php'); ?>
</body>
</html>