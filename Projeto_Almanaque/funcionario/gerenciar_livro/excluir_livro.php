<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
$excluir = $_SESSION['excluir'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Adicionar</title>
    <style>
        .forms{
            background-color: white;
            margin-right: 20%;
            margin-left: 20%;
            border-radius: 20px;
            color: black;
            text-align: center;
        }
        .forms button, .forms a{
            color: #fff;
            border-radius: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 50px;
            padding-right: 50px;
            margin-right: 30px;
            border: none;
            font-size: 1rem;
            font-weight: 400;
            background-color: #276daf;
            transition: all .50s ease;
        }
        .forms button:hover, .forms a:hover{
            background-color: #235d92;
        }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_livro_gerenciar.php'); ?> <br><br>
    
    <h1 style="text-align: center; margin-bottom: 12px;">Digite para selecionar o livro que será excluido</h1>

    <form action="#" method="post">
        <div class="search-icon">
            <input type="text" placeholder="Pesquisar!" name="valor" required>
            <button type="submit" class="icon"><i class="ri-search-line"></i></button>
        </div>
    </form>

    <br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
        if($excluir == "id_livro"){

            $sql = "SELECT * FROM livro id_livro WHERE id_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                $id_livro = $row['id_livro'];
                $url_imagem_livro = $row['url_imagem_livro'];
                $nome_livro = $row['nome_livro'];
                $id_autor = $row['id_autor'];
                $id_genero = $row['id_genero'];
    
                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                        $nome_autor = $row2['nome_autor'];
                    }
    
                $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                        $nome_genero = $row3['nome_genero'];
                    }
    
                $editora_livro = $row['editora_livro'];
                $num_edicao_livro = $row['num_edicao_livro'];
                $estoque_livro = $row['estoque_livro'];
                $sinopse_livro = $row['sinopse_livro'];
    
                echo "<div class='book-info-container'>
                        <form method='post' action='livro_aberto.php'>
                            <input name='id_livro' value='".$id_livro."' style='display: none;'>
                            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                                <img class='book-cover' src='../../imagens/livro_capa/".$url_imagem_livro."' alt='Capa do Livro'>
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
                                <span class='info-conteudo'><span class='info-destaque'>Autor:</span>".$nome_autor."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Idioma:</span>Português(BR)</span>
                                <span class='info-conteudo'><span class='info-destaque'>Editora:</span>".$editora_livro."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Nº da Edição:</span>".$num_edicao_livro."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Gênero:</span>".$nome_genero."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Id: </span>".$id_livro."</span>
                            </div>
                            <div class='text-sinopse'>
                                <p>".$sinopse_livro."</p>
                            </div>
                        </div>
                    </div>";
                    ?>

                    <br><br>
                    <div class="forms">
                        <form  action='php/excluindo_livro.php' method='post' style="margin-top: 0px;">
                            <h1 style="color: black; text-align: center;">Excluir esse Livro?</h1><br>
                            <?php echo "<input type='text' name='excluindo' value='".$row['nome_livro']."' style='display: none;'>"; ?>
                            <input type='text' name='valor' value='nome_livro' style='display: none;'>       
                            <button type='submit'>Sim</button><a href="livro_lista.php">Não</a>
                        </form><br><br>
                    </div>                            
                    <?php
            }
        }
        else{

            $sql = "SELECT * FROM livro id_livro WHERE nome_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                $id_livro = $row['id_livro'];
                $url_imagem_livro = $row['url_imagem_livro'];
                $nome_livro = $row['nome_livro'];
                $id_autor = $row['id_autor'];
                $id_genero = $row['id_genero'];
    
                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                        $nome_autor = $row2['nome_autor'];
                    }
    
                $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                        $nome_genero = $row3['nome_genero'];
                    }
    
                $editora_livro = $row['editora_livro'];
                $num_edicao_livro = $row['num_edicao_livro'];
                $estoque_livro = $row['estoque_livro'];
                $sinopse_livro = $row['sinopse_livro'];
    
                echo "<div class='book-info-container'>
                        <form method='post' action='livro_aberto.php'>
                            <input name='id_livro' value='".$id_livro."' style='display: none;'>
                            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                                <img class='book-cover' src='../../imagens/livro_capa/".$url_imagem_livro."' alt='Capa do Livro'>
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
                                <span class='info-conteudo'><span class='info-destaque'>Autor:</span>".$nome_autor."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Idioma:</span>Português(BR)</span>
                                <span class='info-conteudo'><span class='info-destaque'>Editora:</span>".$editora_livro."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Nº da Edição:</span>".$num_edicao_livro."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Gênero:</span>".$nome_genero."</span>
                                <span class='info-conteudo'><span class='info-destaque'>Id: </span>".$id_livro."</span>
                            </div>
                            <div class='text-sinopse'>
                                <p>".$sinopse_livro."</p>
                            </div>
                        </div>
                    </div>";

    ?>

    <br><br>

    <section class="containers" >
        <form  action='php/excluindo_livro.php' method='post' class="form" style="margin-top: 0px;">
            <div class="input-box">
                <h1 style="color: black; text-align: center;">Excluir esse Livro?</h1>
            </div>
            <div class="input-box">
                <?php echo "<input type='text' name='excluindo' value='".$row['nome_livro']."' style='display: none;'>"; ?>
                <input type='text' name='valor' value='nome_livro' style='display: none;'>       
            </div>
            <button type='submit'>Sim<a href="livro_lista.php">Não</a></button>
        </form> 
    </section><br><br>
                                
    <?php
            }
        }
    }
    ?>

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