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
    
    <table border="1" style="width:90%; margin: auto;">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
            <th>Data de Nascimento</th>
            <th>Data de Falecimento</th>
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

                echo "<tr>";
                echo "<td>".$id_autor."</td>";
                echo "<td>".$nome_autor."</td>";
                echo "<td>".$pais_autor."</td>";
                echo "<td>".$nascimento_autor."</td>";
                echo "<td>".$falecimento_autor."</td>";
                echo "</tr>";
                
            };
            
        ?>
    </table>
    
    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>