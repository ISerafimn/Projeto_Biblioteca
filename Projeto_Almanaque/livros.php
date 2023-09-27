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
    <title>Livro Aberto</title>
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

    <table border="1" style="width:90%; margin: auto;">
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

        // sistema que mostra todos os livros contidos no banco de dados.
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  livro");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_livro = $result['id_livro'];
                $nome_livro = $result['nome_livro'];
                $id_autor = $result['id_autor'];
                $id_genero = $result['id_genero'];
                $editora_livro = $result['editora_livro'];
                $num_edicao_livro = $result['num_edicao_livro'];
                $estoque_livro = $result['estoque_livro'];
                $sinopse_livro = $result['sinopse_livro'];
                $url_imagem_livro = $result['url_imagem_livro'];

                echo "<tr>";
                echo "<td>".$id_livro."</td>";

                // sistema onde é criado um link que leva ao arquivo "livro_aberto.php", ele puxa o id_livro como valor de indentificador e a url_imagem_livro e nome_livro respectivamente como informações que serão mostrada para o usuário.
                
                echo "<td><form method='post' action='livro_aberto.php'>
                        <input name='id_livro' value='".$id_livro."' style='display: none;'>
                            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                                <img src='imagens/livro_capa/".$url_imagem_livro."'>
                            </button>
                    </form></td>";

                    echo "<td><form method='post' action='livro_aberto.php'>
                    <input name='id_livro' value='".$id_livro."' style='display: none;'>
                        <button type='submit' name='Submit' style='border: none; background-color:  ;'>
                            ".$nome_livro."
                        </button>
                    </form></td>";

                    $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row['nome_autor']."</td>";
                    }

                    $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row = mysqli_fetch_array($resultad3))
                    { 
                    
                        echo "<td>".$row['nome_genero']."</td>";
                    }
                    
                echo "<td>".$editora_livro."</td>";
                echo "<td>".$num_edicao_livro."</td>";
                echo "<td>".$estoque_livro."</td>";
                echo "<td>".$sinopse_livro."</td>";
                echo "</tr>";
                
            };
            
        ?>
    </table>
    
    <br><br><br><br><br><br>


    <?php include('include/import_footer.php'); ?>
</body>
</html>