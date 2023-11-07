<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/livro-aberto.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Resultado da Pesquisa</title>
    <style>
        img{
            width: 200px;
        }
    </style>  
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php')    ?>

    <br><br><br><br><br>

    <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="3">Digite algo para pesquisar</td>
        </tr>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            
            $sql_code = "SELECT * FROM livro WHERE nome_livro LIKE '%$pesquisa%' OR editora_livro LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);

            $sql_code2 = "SELECT * FROM autor WHERE nome_autor LIKE '%$pesquisa%'";
            $sql_query2 = $mysqli->query($sql_code2) or die("ERRO ao consultar! " . $mysqli->error);

            $pesquisa_autor = $sql_query2->num_rows;

            $sql_code3 = "SELECT * FROM genero WHERE nome_genero LIKE '%$pesquisa%'";
            $sql_query3 = $mysqli->query($sql_code3) or die("ERRO ao consultar! " . $mysqli->error);

            $pesquisa_genero = $sql_query3->num_rows;

            if($pesquisa > 0){

                if ($sql_query->num_rows == 0) {
                } else {
                    while ($result = $sql_query->fetch_assoc())

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
                }

                if($pesquisa_autor == 0){
                }
                else{
                    $sql4 = mysqli_query($mysqli, "SELECT  *   FROM  AUTOR where nome_autor like '%$pesquisa%'");
                    while ($result4 = mysqli_fetch_array($sql4))
            
                        {

                            $id_autor = $result4['id_autor'];
                            
                            $sql5 = mysqli_query($mysqli, "SELECT  *   FROM  livro where id_autor = '$id_autor'");
                            while ($result5 = mysqli_fetch_array($sql5)){
                                
                        $id_livro = $result5['id_livro'];
                        $nome_livro = $result5['nome_livro'];
                        $id_autor = $result5['id_autor'];
                        $id_genero = $result5['id_genero'];
                        $editora_livro = $result5['editora_livro'];
                        $num_edicao_livro = $result5['num_edicao_livro'];
                        $estoque_livro = $result5['estoque_livro'];
                        $sinopse_livro = $result5['sinopse_livro'];
                        $url_imagem_livro = $result5['url_imagem_livro'];

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
                        }
                }
                if($pesquisa_genero == 0){
                }
                else{
                    $sql4 = mysqli_query($mysqli, "SELECT  *   FROM  genero where nome_genero like '%$pesquisa%'");
                    while ($result4 = mysqli_fetch_array($sql4))
            
                        {

                            $id_genero = $result4['id_genero'];
                            
                            $sql5 = mysqli_query($mysqli, "SELECT  *   FROM  livro where id_genero = '$id_genero'");
                            while ($result5 = mysqli_fetch_array($sql5)){
                                
                                $id_livro = $result5['id_livro'];
                                $nome_livro = $result5['nome_livro'];
                                $id_autor = $result5['id_autor'];
                                $id_genero = $result5['id_genero'];
                                $editora_livro = $result5['editora_livro'];
                                $num_edicao_livro = $result5['num_edicao_livro'];
                                $estoque_livro = $result5['estoque_livro'];
                                $sinopse_livro = $result5['sinopse_livro'];
                                $url_imagem_livro = $result5['url_imagem_livro'];
        
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
                        }
                }
            }
            else{
                echo "Nenhum resultado encontrado";
            }
        }
        ?>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>