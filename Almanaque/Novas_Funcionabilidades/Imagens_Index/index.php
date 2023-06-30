<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="itens_livros.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens Teste</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        .item img{
            width: 175px;
            height: 250px;
        }
    </style>
</head>
<body>
    <div class='container'>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM livro ORDER BY id_livro ASC LIMIT 7";
        $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
            {
                echo "<div class='lista'>
                        <div class='item'>
                            <img src='".$row['url_imagem_livro']."'>
                            <p>".$row['nome_livro']."</p>
                        </div>
                    </div>";
            }
    ?>
    </div>
</body> 
</html>