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
    <title>Atualizar Categoria</title>
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

    <?php include('../../include/import_menu_genero_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Atualizar</h1><br>

    <table>
        <form action="php/atualizando_genero.php" method="post" style="text-align: center;">
            <tr>
                <td>Atualizar: </td>
                <td>
                    <select name="id_genero" style="width: 250px; color: rgb(52, 52, 52)" required>
                    <option value="vo">Gêneros:</option>
                        <?php
                            $sql = "SELECT * FROM genero";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                            {
                                echo "<option value='".$row['id_genero']."'>".$row['nome_genero']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Para: </td>
                <td>
                    <input type="text" name="nome_genero" placeholder="Digite o Nome do Gênero!" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Atualizar</button>
                </td>
            </tr>
        </form>
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