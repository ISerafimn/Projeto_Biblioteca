<?php
include('../php/protect.php');

if($_SESSION['id_sessao'] == 2) {
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
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_pagina_inicial.php'); ?>
    </div>

    <p> ATUALIZAÇÃO DE FUNCIONARIO </p>
    <form name="atualizar_usuario" method="post" action="../php/atualizar_funcionario.php">
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
                <td colspan="2" align="center"><input type="submit" name="Submit" value="Enviar" required></td>
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