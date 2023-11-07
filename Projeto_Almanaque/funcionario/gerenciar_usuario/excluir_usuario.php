<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    $consultar = $_SESSION['consultar'];
    $excluir = $_SESSION['excluir'];
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Excluir Usuário</title>
    <style>
        .book-info-container {
        margin: auto;
        padding: 5px;  
        display: flex;
        text-align: center;
        margin: 10px;
        background-color: transparent;
        border-radius: 10px;
        justify-content: center;
    }
    .book-info {
        color: #fff;
        padding: 5px;
        text-align: left;
    }
    .forms{
        background-color: white;
        margin-right: 20%;
        margin-left: 20%;
        border-radius: 20px;
        color: black;
        text-align: center;
    }
    .forms button, .forms a{
        color: #fff;
        border-radius: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 50px;
        padding-right: 50px;
        margin-right: 30px;
        border: none;
        font-size: 1rem;
        font-weight: 400;
        background-color: #276daf;
        transition: all .50s ease;
    }
    .forms button:hover, .forms a:hover{
        background-color: #235d92;
    }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_usuario_gerenciar.php'); ?>
    
    <br>
    
    <h1 style="text-align: center;">Excluir</h1><br>
    
    <p style="text-align: center; margin-bottom: 12px;">Digite para selecionar o Usuário que será Excluido</p>

    <form action="#" method="post">
        <div class="search-icon">
            <input type="text" placeholder="Pesquisar!" name="valor" required>
            <button type="submit" class="icon"><i class="ri-search-line"></i></button>
        </div>
    </form>

<br>

<?php

    @$valor = $_POST['valor'];
    if ($valor == ""){
    }
    else{
        
        if($excluir == 'id_usuario'){

        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_usuario='$valor'");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo    "<hr><div class='book-info-container'>
            <div class='book-info'>
                <div class='info-aberto'>
                    <span class='info-conteudo'><span class='info-destaque'>Nome: </span>".$nome_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Emaill: </span>".$email_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Nascimento: </span>".$data_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>CPF: </span>".$cpf_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Endereço: </span>".$endereco_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Telefone: </span>".$telefone_usuario."</span>
                </div>
            </div>
        </div>";

        ?>
        <div class="forms">
            <form  action='php/excluindo_usuario.php' method='post' style="margin-top: 0px;">
                <h1 style="color: black; text-align: center;">Excluir esse Usuário?</h1><br>
                <?php echo "<input type='text' name='excluindo' value='".$nome_usuario."' style='display: none;'>"; ?>
                <input type='text' name='valor' value='nome_usuario' style='display: none;'>       
                <button type='submit'>Sim</button><a href="usuario_lista.php">Não</a>
            </form><br>
        </div><br><br>                            
        <?php

        }
    }
    
    else{
        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE nome_usuario LIKE '%$valor%'");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo    "<hr><div class='book-info-container'>
            <div class='book-info'>
                <div class='info-aberto'>
                    <span class='info-conteudo'><span class='info-destaque'>Nome: </span>".$nome_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Emaill: </span>".$email_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Nascimento: </span>".$data_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>CPF: </span>".$cpf_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Endereço: </span>".$endereco_usuario."</span>
                    <span class='info-conteudo'><span class='info-destaque'>Telefone: </span>".$telefone_usuario."</span>
                </div>
            </div>
        </div>";

        ?>
        <div class="forms">
            <form  action='php/excluindo_usuario.php' method='post' style="margin-top: 0px;">
                <h1 style="color: black; text-align: center;">Excluir esse Usuário?</h1><br>
                <?php echo "<input type='text' name='excluindo' value='".$nome_usuario."' style='display: none;'>"; ?>
                <input type='text' name='valor' value='nome_usuario' style='display: none;'>       
                <button type='submit'>Sim</button><a href="usuario_lista.php">Não</a>
            </form><br>
        </div><br><br>                            
        <?php

        }
    }
}
?>
    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
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