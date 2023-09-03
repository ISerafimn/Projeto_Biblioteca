<?php
include('../php/protect.php');

if($_SESSION['id_sessao'] == 1) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../design/login-cadastro.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        .item img{
            width: 175px;
            height: 250px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_pagina_inicial.php'); ?>
    </div>

    <h1> ATUALIZAÇÃO DE USUÁRIO </h1>
    <form name="atualizar_usuario" method="post" action="../php/atualizar_usuario.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_usuario" type="text" placeholder="Digite o nome do usuário" required></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário" required></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email_usuario" type="email" placeholder="Digite o E-mail do usuario" required></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input name="endereco_usuario" type="text" placeholder="Digite o endereço do usuario" required></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone_usuario" type="number" placeholder="Digite o telefone do usuario" required></td>
            </tr>
            <tr>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
     <a href="index.php">voltar</a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>