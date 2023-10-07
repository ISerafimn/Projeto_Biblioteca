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
    <title>Almanaque</title>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_pagina_inicial.php'); ?>
    </div>

    <h1>GERENCIAR</h1>
        <br>
    <a href="gerenciar_livro/livro_lista.php">Livros</a><br>
    <a href="gerenciar_autor/autor_lista.php">Autor</a><br>
    <a href="gerenciar_usuario/usuario_lista.php">Usuarios</a><br>
    <a href="movimentacao_lista.php">Movimentação</a>
    
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>