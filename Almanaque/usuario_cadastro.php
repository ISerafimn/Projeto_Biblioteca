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
<body>
<?php include('include/menu_pagina_inicial.php'); ?>
    
    <!-- Form para a obtenção de dados para o cadastro do usuarío no banco de dados. !-->
    <form name="Cadastro Usuario" method="post" action="php/variaveis.php">
        <h1>Cadastro do Usuário</h1>
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o nome do usuário" required></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário" required></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o CPF do usuário" role="none" required></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email_usuario" type="email" size="50" maxlenght="50" placeholder="Digite o E-mail do usuario" required></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input name="endereco_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o endereço do usuario" required></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario" required></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario" required></td>
            </tr>
        </table>
            <br>
        <button type="submit" name="Submit">Concluir Cadastro</button>
    </form>
</body>
</html>