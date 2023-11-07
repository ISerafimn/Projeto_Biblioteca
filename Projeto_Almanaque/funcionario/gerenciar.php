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
        .corpo{
            margin: auto;
            width: 300px;
        }
        .corpo button{
            width: 300px;
            height: 50px;
            border: none;
            margin-bottom: 10px;
            background-color: white;
        }
        .corpo button:hover{
            background-color: #276daf;
            color: white;
        }
    </style>
</head>
<body>
    <?php include('../include/import_menu_logado.php'); ?>

    <br><br><br><br><br>

    <div class="corpo">
        <h1 style="text-align: center;"><i class="ri-settings-3-fill" style="padding-right: 10px;"></i>GERENCIAR</h1><br>
        
        <a href="gerenciar_livro/livro_lista.php"><button>Livros</button></a><br><br>
        <a href="gerenciar_genero/genero_lista.php"><button>Categoria / Gênero</button></a><br><br>
        <a href="gerenciar_autor/autor_lista.php"><button>Autor</button></a><br><br>
        <a href="gerenciar_usuario/usuario_lista.php"><button>Usuarios</button></a><br><br>
        <a href="gerenciar_movimentacao/movimentacao_lista.php"><button>Movimentação</button></a>
    </div>
    

    <br><br>
    <?php include('../include/import_footer_logado.php');
    include('../include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>