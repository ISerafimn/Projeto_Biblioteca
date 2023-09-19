<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/login-cadastro.css">
    <link rel="stylesheet" href="design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
    <?php include('include/menu_pagina_inicial.php');
        include('include/acessibilidade.php');?>
        
    <!-- Form para a obtenção de dados para o cadastro do funcionario no banco de dados. !-->
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
</body>
</html>