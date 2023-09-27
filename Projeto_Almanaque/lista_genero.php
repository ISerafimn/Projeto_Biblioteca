<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Sobre</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

    <!-- Esse sistema puxa os livros em relacão ao genero escolhido no menu na página anteriora. !-->
    <table style border="1">
    <tr>
        <th>ID</th>
        <th>CAPA</th>
        <th>NOME</th>
        <th>AUTOR</th>
        <th>GENERO</th>
        <th>EDITORA</th>
        <th>Nº DA EDIÇÃO</th>
        <th>ESTOQUE</th>
        <th>SINOPSE</th>
    </tr>

<?php
    $id_genero = $_POST ['id_genero'];

    $sql = "SELECT * FROM livro id_genero WHERE id_genero = '$id_genero'";
    $result = $mysqli->query($sql);

    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['id_livro']."</td>";

        // sistema onde é criado um link que leva ao arquivo "livro_aberto.php", ele puxa o id_livro como valor de indentificador e a url_imagem_livro e nome_livro respectivamente como informações que serão mostrada para o usuário.
        echo "<td><form method='post' action='livro_aberto.php'>
        <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                <img src='imagens/livro_capa/".$row['url_imagem_livro']."'>
            </button>
        </form></td>";

        echo "<td><form method='post' action='livro_aberto.php'>
        <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                ".$row['nome_livro']."
            </button>
        </form></td>";

        echo "<td>".$row['id_autor']."</td>";

        $sql2 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
        $result2 = $mysqli->query($sql2);
    
        while ($row2 = mysqli_fetch_array($result2))
        {
            echo "<td>".$row2['nome_genero']."</td>";
        }

        echo "<td>".$row['editora_livro']."</td>";
        echo "<td>".$row['num_edicao_livro']."</td>";
        echo "<td>".$row['estoque_livro']."</td>";
        echo "<td>".$row['sinopse_livro']."</td>";
        echo "<tr>";
    }
?>
    </table>
    
    <br><br><br><br><br><br>


    <?php include('include/import_footer.php'); ?>
</body>
</html>