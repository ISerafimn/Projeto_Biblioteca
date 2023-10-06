<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/livro-aberto.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Livros</title>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>
    <?php
    
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
                echo    "<div class='book-info-container'>
                            <form method='post' action='livro_aberto.php'>
                                <input name='id_livro' value='".$id_livro."' style='display: none;'>
                                <button type='submit' name='Submit' style='border: none; background-color: white;'>
                                    <img class='book-cover' src='imagens/livro_capa/".$url_imagem_livro."' alt='Capa do Livro'>
                                </button>
                            </form>
                            <div class='book-info'>

                            <form method='post' action='livro_aberto.php'>
                            <input name='id_livro' value='".$id_livro."' style='display: none;'>
                                <button type='submit' name='Submit' style='border: none; background-color: white;'>
                                    <h1>".$nome_livro."</h1>
                                </button>
                            </form>

                                
                                <div class='info-aberto'>
                                    <span class='info-conteudo'><span class='info-destaque'>Autor: </span>".$nome_autor."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Idioma: </span>Português(BR)</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Editora: </span>".$editora_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Nº da Edição: </span>".$num_edicao_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Gênero: </span>".$nome_genero."</span>
                                </div>
                                <div class='text-sinopse'>
                                    <p>".$sinopse_livro."</p>
                                </div>
                            </div>
                        </div>  <br>";
            }
        ?>
    
    <br><br><br><br><br><br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>