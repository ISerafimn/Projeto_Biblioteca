<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        input::placeholder {
            color: rgb(52, 52, 52);
        }
        input{
            width: 250px;
            color: black;
        }
        input::-webkit-inner-spin-button{
            display: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php');
        include('../../include/acessibilidade.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_usuario.php'); ?>
    
    <br>

    <form name="Cadastro Usuario" method="post" action="variaveis_adicionar.php">
        <h1>Cadastro do Usuário</h1>
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o nome do usuário"></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário"></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o CPF do usuário" role="none"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email_usuario" type="email" size="50" maxlenght="50" placeholder="Digite o E-mail do usuario"></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input name="endereco_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o endereço do usuario"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario"></td>
            </tr>
        </table>
            <br>
        <button type="submit" name="Submit">Concluir Cadastro</button>
    </form>

</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>