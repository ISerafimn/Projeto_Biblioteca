<?php session_start();
if(isset($_SESSION['id_sessao'])){
    if($_SESSION['id_sessao'] == 1) {
            
        $id_usuario = $_SESSION['id_usuario'];
    }
}
?>
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
    <title>Livro Aberto</title>
    <style>

    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php

        @$id_livro=$_POST['id_livro'];

        if(isset($_SESSION['temp_livro'])){
            $id_livro = $_SESSION['temp_livro'];
            unset($_SESSION['temp_livro']);
        }

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
                echo    "<div class='book-info-container'>
                            <img class='book-cover' src='imagens/livro_capa/".$url_imagem_livro."' alt='Capa do Livro'>
                            <div class='book-info'>
                                <h1>".$nome_livro."</h1>
                                <div class='info-aberto'>
                                    <span class='info-conteudo'><span class='info-destaque'>Autor:</span>".$nome_autor."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Idioma:</span>Português(BR)</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Editora:</span>".$editora_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Nº da Edição:</span>".$num_edicao_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Gênero:</span>".$nome_genero."</span>
                                </div>
                                <div class='text-sinopse'>
                                    <p>".$sinopse_livro."</p>
                                </div>";
                 
                if(isset($_SESSION['msg-retirada-livro'])){
                    echo  $_SESSION['msg-retirada-livro'];
                    unset ($_SESSION['msg-retirada-livro']);
                }
                else{
                    

                    if(!isset($_SESSION['id_sessao'])){
                            echo   "<div class='button-space'>
                                        <table>
                                            <tr>
                                                <form action='usuario_login.php' method='post'>
                                                    <td>
                                                        <button class='button-retirar' type='submit'>RETIRAR</button>
                                                    </td>
                                                </form>
                                                <form action='#'>
                                                    <td>
                                                        <button class='button-favorito'><i class='ri-heart-fill'></i></button>
                                                    </td>
                                                </form>
                                            </tr>
                                        </table>
                                    </div>";
                    }
                    else{
                        if($_SESSION['id_sessao'] == 1){
                            include('include/conexao.php');

                            $sql_code = "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != 3 AND 5 ";

                            $sql_query = $mysqli->query($sql_code);
                            $quantidade = $sql_query->num_rows;


                            $sql0 = mysqli_query($mysqli, "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != 3 ");
                            while ($result = mysqli_fetch_array($sql0)){
                                $id_status_movimentacao = $result['id_status_movimentacao'];
                                
                                if ($id_status_movimentacao == 5){
                                    $quantidade = $quantidade - 1;
                            }
                            }
                           
                            
                        
                            if($quantidade > 1){
                                echo "<p style='text-align: center; color: #276daf;'>Você já tem 2 livros selecionados.</p>";
                            }
                            else{
                                $id_livro_sql = 0;
                                $sql = mysqli_query($mysqli, "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != 5 ");
                                while ($result = mysqli_fetch_array($sql)){
                                    $id_livro_sql = $result['id_livro'];
                                }
                                if($id_livro_sql != $id_livro){
                                    ?>
                                    <div class='button-space'>
                                        <form action="php/retirando_livro.php" method="post" style="text-align: left;">
                                            <input type="text" name="id_livro" value="<?php echo "$id_livro"?>" style="display: none;">
                                            <button class='button-retirar' type='submit'>RETIRAR</button>
                                            <button class='button-favorito'><i class='ri-heart-fill'></i></button>
                                        </form>
                                    </div>
                                    <?php
                                }
                                else{
                                    echo "<br><p style='text-align: center; color: #276daf;'>Você já selecionou esse livro! </p>";
                                }
                            }
                        }
                    }
                }
                echo        "</div>
                        </div>";
            }
        ?>

    <br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>