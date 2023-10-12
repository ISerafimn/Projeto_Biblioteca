<?php
session_start();
include('../php/protect.php');
    
if($_SESSION['id_sessao'] == 1) {
        
$email_usuario = $_SESSION['email_usuario'];
    
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
        $sql = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email_usuario = '$email_usuario'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_usuario = $result['id_usuario'];
                $nome_usuario = $result['nome_usuario'];
                $email_usuario = $result['email_usuario'];
                $data_usuario = $result['data_usuario'];
                $cpf_usuario = $result['cpf_usuario'];
                $endereco_usuario = $result['endereco_usuario'];
                $telefone_usuario = $result['telefone_usuario'];
                echo    "<div class='book-info-container'>
                            <div class='book-info'>
                                <h1>".$nome_usuario."</h1>
                                <div class='info-aberto'>
                                    <span class='info-conteudo'><span class='info-destaque'>Nome: </span>".$nome_usuario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Emaill: </span>".$email_usuario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Nascimento: </span>".$data_usuario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>CPF: </span>".$cpf_usuario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Endereço: </span>".$endereco_usuario."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Telefone: </span>".$telefone_usuario."</span>
                                </div>
                                <form action='atualizar_usuario.php' method='post'>
                                    <input type='text' name='id_usuario' value='".$id_usuario."' style='display: none;'>
                                    <button class='button-retirar'>Atualizar os Dados</button>
                                </form>
                            </div>
                        </div>";
            };
            
            $_SESSION['id_usuario'] = $id_usuario;
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