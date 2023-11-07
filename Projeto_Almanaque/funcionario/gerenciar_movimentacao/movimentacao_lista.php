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
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Lista Movimentação</title>
</head>
<body>
<?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_movimentacao_gerenciar.php'); ?>
    
    <br>

    <table>
        <tr>
            <th class="atributo_th">Nome do Usuário e ID</th>
            <th class="atributo_th">Nome do Livro</th>
            <th class="atributo_th">Status e ID Movimentação</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_movimentacao = $result['id_movimentacao'];
                $id_usuario = $result['id_usuario'];
                $id_livro = $result['id_livro'];
                $id_status_movimentacao = $result['id_status_movimentacao'];

                echo "<tr>";

                    $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row = mysqli_fetch_array($resultad2))
                    { 
                        echo "<td class='atributo_td'><form method='post' action='movimentacao_aberto.php'>
                        <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                            <button type='submit' name='Submit' style='border: none; background-color: transparent; color: #fff; cursor: pointer; '>
                                ".$row['nome_usuario']." (".$id_usuario.")
                            </button>
                        </form></td>";
                    }
                    
                    $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                        echo "<td class='atributo_td'>".$row3['nome_livro']."</td>";
                    }

                    $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                    $resultad4 = $mysqli->query($sql4);
                
                    while ($row4 = mysqli_fetch_array($resultad4))
                    { 
                    
                        echo "<td class='atributo_td'>".$row4['nome_status_movimentacao']." (".$id_movimentacao.")</td>";
                    }
                
            };
            
        ?>
    </table>
    
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