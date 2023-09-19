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
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Livros</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_pagina_inicial.php');
        include('../include/acessibilidade.php');?>
    </div>

    <br>

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
            <th>STATUS</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != 3");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_livro = $result['id_livro'];
                $id_status_movimentacao = $result['id_status_movimentacao'];
                
                    $sql2 = mysqli_query($mysqli, "SELECT * FROM livro WHERE id_livro = '$id_livro'");
                    while ($result2 = mysqli_fetch_array($sql2))
                    {

                    $id_livro = $result2['id_livro'];
                    $nome_livro = $result2['nome_livro'];
                    $id_autor = $result2['id_autor'];

                        $sql3 = mysqli_query($mysqli, "SELECT * FROM autor WHERE id_autor = '$id_autor'");
                        while ($result3 = mysqli_fetch_array($sql3))
                        {

                        $nome_autor = $result3['nome_autor'];

                        }

                        
                    $id_genero = $result2['id_genero'];

                    $sql3 = mysqli_query($mysqli, "SELECT * FROM genero WHERE id_genero = '$id_genero'");
                        while ($result3 = mysqli_fetch_array($sql3))
                        {

                        $nome_genero = $result3['nome_genero'];

                        }

                    $editora_livro = $result2['editora_livro'];
                    $num_edicao_livro = $result2['num_edicao_livro'];
                    $estoque_livro = $result2['estoque_livro'];
                    $sinopse_livro = $result2['sinopse_livro'];
                    $url_imagem_livro = $result2['url_imagem_livro'];

                    }

                    $sql4 = mysqli_query($mysqli, "SELECT * FROM status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'");
                    while ($result4 = mysqli_fetch_array($sql4))
                    {

                        $nome_status_movimentacao = $result4['nome_status_movimentacao'];

                    }

                echo "<tr>";
                echo "<td>".$id_livro."</td>";
                echo "<td><img src='../imagens/livro_capa/".$url_imagem_livro."'></td>";
                echo "<td>".$nome_livro."</td>";
                echo "<td>".$nome_autor."</td>";
                echo "<td>".$nome_genero."</td>";
                echo "<td>".$editora_livro."</td>";
                echo "<td>".$num_edicao_livro."</td>";
                echo "<td>".$estoque_livro."</td>";
                echo "<td>".$sinopse_livro."</td>";
                echo "<td>".$nome_status_movimentacao."</td>";
                echo "</tr>";
            };
        ?>
    </table>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>