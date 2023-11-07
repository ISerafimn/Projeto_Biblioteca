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
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Autor Lista</title>
    <style>
    @media screen and (max-width: 500px) {
        section{
            display: grid;
            grid-template-columns: auto auto;
        }
        
    }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_autor_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Autores</h1><br>
    
    <table>
        <tr>
            <th class="id_th">ID</th>
            <th class="atributo_th">Nome</th>
            <th class="atributo_th">Nacionalidade</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  autor");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_autor = $result['id_autor'];
                $nome_autor = $result['nome_autor'];
                $pais_autor = $result['pais_autor'];
                $nascimento_autor = $result['nascimento_autor'];
                $falecimento_autor = $result['falecimento_autor'];
                $icon = "";
                if($falecimento_autor != ""){
                    $icon = " - ";
                }

                echo "<tr>";
                echo "<td class='id_th'>".$id_autor."</td>";
                echo "<td class='atributo_th'>".$nome_autor." (".$nascimento_autor, $icon, $falecimento_autor.")</td>";
                echo "<td class='atributo_th'>".$pais_autor."</td>";
                echo "</tr>";
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