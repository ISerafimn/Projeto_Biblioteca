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
    <title>Categorias</title>
    <style>
        .book-info-container {
            margin: auto;
            margin: 10px;
            display: flex;
            background-color: white;
        }

        .book-info {
            flex: 1;
            color: black;
            text-align: left;
        }

        .book-cover {
            margin-right: 20px;
            width: 250px;
            height: 300px;
        }

        .titu{
            color: red;
        }
        .quebra{
            word-break: initial;
        }
        p{
            padding-right: 30px;
        }
    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

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

                    $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row = mysqli_fetch_array($resultad2))
                    { 
                    
                        $nome_autor = $row['nome_autor'];
                    }
                    
                    $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row = mysqli_fetch_array($resultad3))
                    { 
                    
                        $nome_genero = $row['nome_genero'];
                    }
                
            }
        ?>

    <div class="book-info-container">
        <img class="book-cover" src="mm.jpg" alt="Capa do Livro">
        <div class="book-info">
            <h1>Harry Potter e a Pedra Filosofal</h1>
            <p><span class="quebra"><span class="titu">Autor:</span>J.K. Rowling</span>
            <span class="quebra"><span class="titu">Idioma:</span>Português(BR)</span>
            <span class="quebra"><span class="titu">Editora:</span>Panani</span>
            <span class="quebra"><span class="titu">Nº da Edição:</span>6</span>
            <span class="quebra"><span class="titu">Gênero:</span>Fantasia</span></p>

            <p>"Harry Potter e a Pedra Filosofal" é o primeiro livro da série escrita por J.K. Rowling. A história segue Harry Potter, um jovem órfão que descobre que é um bruxo e que foi aceito em Hogwarts, uma escola de magia. Lá, ele faz amigos, enfrenta desafios e descobre segredos sobre seu passado. A trama gira em torno da busca pela lendária Pedra Filosofal, que concede a imortalidade, e da luta contra o vilão Lord Voldemort, que busca obtê-la para seus próprios fins.</p>

            <div class="button-space">
                <button class="remove-button">RETIRAR</button>
                <button class="button-favorito"><i class="ri-heart-fill"></i></button>
            </div>
        </div>
    </div>
    
    <br>


    <?php include('include/import_footer.php'); ?>
</body>
</html>