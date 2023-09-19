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
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php');
        include('../../include/acessibilidade.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_autor.php') ?>
    
    <table>
        <form action="adicionar_autor_exe.php" method="post">
            <tr>
                <td>Nome do Autor:</td>
                <td><input type="text" name="nome_autor"></td>
            </tr>
            <tr>
                <td>Nacionalidade:</td>
                <td><input type="text" name="pais_autor"></td>
            </tr> 
            <tr>
                <td>Data de Nascimento:</td>
                <td><input type="number" name="nascimento_autor"></td>
            </tr>
            <tr>
                <td>Data de Falecimento(opcional):</td>
                <td><input type="number" name="falecimento_autor"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Enviar</button></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>