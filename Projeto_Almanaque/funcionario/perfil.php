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
    <title>Perfil</title>
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

        <?php

        $sql = mysqli_query($mysqli, "SELECT  *   FROM  funcionario WHERE id_funcionario = '$id_funcionario'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_funcionario = $result['id_funcionario'];
                $nome_funcionario= $result['nome_funcionario'];
                $email_funcionario= $result['email_funcionario'];
                $data_funcionario= $result['data_funcionario'];
                $cpf_funcionario= $result['cpf_funcionario'];

                echo    "<div class='book-info-container'>
                            <div class='book-info'>
                                <h1>".$nome_funcionario."</h1>
                                <div class='info-aberto'>
                                    <span class='info-conteudo'><span class='info-destaque'>Nome: </span>".$nome_funcionario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Emaill: </span>".$email_funcionario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Nascimento: </span>".$data_funcionario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>CPF: </span>".$cpf_funcionario."</span>
                                </div>
                                <form action='atualizar_funcionario.html' method='post'>
                                    <input type='text' name='id_funcionario' value='".$id_funcionario."' style='display: none;'>
                                    <button class='button-retirar'>Atualizar os Dados</button>
                                </form>
                            </div>
                        </div>";
            };
        ?>

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