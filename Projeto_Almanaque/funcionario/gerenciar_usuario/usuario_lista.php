<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Usuário Lista</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .info-container {
            font-size: 14px;
            color: black;
            margin: auto;
            padding: 10px;  
            display: flex;
            margin: 10px;
            background-color: white;
            border-radius: 10px;
        }
        @media screen and (max-width: 500px) {
            .atributo_th, .atributo_td{
                padding-left: 2px;
                padding-right: 2px;
            }
            .id_th, .id_td{
                text-align: center;
                padding-left: 2px;
                padding-right: 2px;
                border: solid;
            }
        }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_usuario_gerenciar.php'); ?>
    
    <br>

    <div class='info-container'>
    <table>
        <tr>
            <th class="atributo_th">Nome do Usuário e ID</th>
            <th class="atributo_th">Email</th>
            <th class="atributo_th">Nascimento</th>
            <th class="atributo_th">CPF</th>
            <th class="atributo_th">Endereço</th>
            <th class="atributo_th">Telefone</th>
        </tr>

    <?php

        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo "<tr>";
            echo "<td class='atributo_td'>".$nome_usuario." (".$id_usuario.")</td>";
            echo "<td class='atributo_td'>".$email_usuario."</td>";
            echo "<td class='atributo_td'>".$data_usuario."</td>";
            echo "<td class='atributo_td'>".$cpf_usuario."</td>";
            echo "<td class='atributo_td'>".$endereco_usuario."</td>";
            echo "<td class='atributo_td'>".$telefone_usuario."</td>";
            echo "</tr>";

        }
    ?>
    </table>
    </div>
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