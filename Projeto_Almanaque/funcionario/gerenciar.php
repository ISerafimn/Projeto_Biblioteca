<?php
session_start();
include('../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
$id_funcionario = $_SESSION['id_funcionario']; 
    
include('../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/livro-aberto.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Gerenciar</title>
    <style>
        .book-info{
            text-align: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php include('../include/import_menu_logado.php'); ?>

    <br><br><br><br><br>

    <div class="corpo" style="margin: auto; text-align: center;">
        <h1><i class="ri-settings-3-fill" style="padding-right: 10px;"></i>GERENCIAR</h1><br>
        
        <a href="gerenciar_livro/livro_lista.php">Livros</a><br><br>
        <a href="gerenciar_autor/autor_lista.php">Autor</a><br><br>
        <a href="gerenciar_usuario/usuario_lista.php">Usuarios</a><br><br>
        <a href="movimentacao_lista.php">Movimentação</a>
    </div>
    

    <br><br><br><br><br><br>

    <?php include('../include/import_footer_logado.php');
    include('../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>