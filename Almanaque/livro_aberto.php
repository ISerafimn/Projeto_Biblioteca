<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/menu.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        img{
            width: 300px;
        }
    </style>
</head>
<body>
    <?php include('include/menu_pagina_inicial.php');
        include('include/acessibilidade.php');?>

    <table border="1" style="width: 90%; margin: auto;">
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
        $id_livro=$_POST['id_livro'];

        // É puxado no banco de dados o livro referente ao id_livro no botão do form da página anteriora a essa.
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  livro WHERE id_livro = '$id_livro'");
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
                echo "<td><img src='imagens/livro_capa/".$url_imagem_livro."'></td>";
                echo "<td>".$nome_livro."</td>";

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
            }
        ?>

    </table>
    
    <br>

    <form action="usuario_login.php">
        <button style="margin-left: 750px;">Retirar</button>
    </form>
</body>
</html>