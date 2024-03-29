<?php
include('../php/protect.php');
    
if($_SESSION['id_sessao'] == 1) {
        
$id_usuario = $_SESSION['id_usuario'];
    
include('../include/conexao.php');
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/livro-aberto.css">
    <link rel="stylesheet" href="../css/menu_gerenciar.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Meus Livros</title>
</head>
<body>
    <?php include('../include/import_menu_logado.php');
    include('../include/conexao.php'); ?>

<br><br><br><br><br>

    <?php include('../include/import_usuario.php'); ?>

<?php


$sql0 = mysqli_query($mysqli, "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != 3");
while ($result = mysqli_fetch_array($sql0))

    {
            $id_livro = $result['id_livro'];
            $id_movimentacao = $result['id_movimentacao'];
            $id_status_movimentacao = $result['id_status_movimentacao'];

        if($id_status_movimentacao != 5){
        
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
                    $sql4 = mysqli_query($mysqli, "SELECT * FROM status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'");
                    while ($result4 = mysqli_fetch_array($sql4))
                    {

                        $nome_status_movimentacao = $result4['nome_status_movimentacao'];

                    }
            }
                echo    "<div class='book-info-container'>
                            <img class='book-cover' src='../imagens/livro_capa/".$url_imagem_livro."' alt='Capa do Livro'>
                            <div class='book-info'>
                                <h1>".$nome_livro."</h1>
                                <div class='info-aberto'>
                                    <span class='info-conteudo'><span class='info-destaque'>Autor:</span>".$nome_autor."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Idioma:</span>Português(BR)</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Editora:</span>".$editora_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Nº da Edição:</span>".$num_edicao_livro."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Gênero:</span>".$nome_genero."</span>
                                    <span class='info-conteudo'><span class='info-destaque'>Status:</span>".$nome_status_movimentacao."</span>
                                </div>
                                <div class='text-sinopse'>
                                    <p>".$sinopse_livro."</p>
                                </div>
                                <div class='button-space'>";

                                if($id_status_movimentacao == 4){
                                echo    "<table style='margin: auto;'><tr><td style='padding-right: 30px;'>
                                        <form action='../php/cancelar_retirada.php' method='post'>
                                            <input type='text' name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                                            <input type='text' name='id_status_movimentacao' value='5' style='display: none;'>
                                            <button class='button-retirar'>Cancelar Retirada</button>
                                        </form></td><td>
                                        <form action='../localizacao.php'>
                                            <button class='button-retirar'>Local de Retirada</button>
                                        </form></td></tr></table>";
                                }

                echo             "</div>
                            </div>
                        </div>";
            }
        }
    ?>

<br>
    
    <br><br><br><br>
    <?php include('../include/import_footer_logado.php');
    include('../include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>