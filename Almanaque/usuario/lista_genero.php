<?php
include('../php/protect.php');

if($_SESSION['id_sessao'] == 1) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genero</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_usuario.php'); ?>
    </div>

    <table style border="1">
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
    $id_genero = $_POST ['id_genero'];

    $sql = "SELECT * FROM livro id_genero WHERE id_genero = '$id_genero'";
    $result = $mysqli->query($sql);

    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['id_livro']."</td>";


        echo "<td><form method='post' action='livro_aberto.php'>
        <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                <img src='../imagens/livro_capa/".$row['url_imagem_livro']."'>
            </button>
        </form></td>";

        echo "<td><form method='post' action='livro_aberto.php'>
        <input name='id_livro' value='".$row['id_livro']."' style='display: none;'>
            <button type='submit' name='Submit' style='border: none; background-color: white;'>
                ".$row['nome_livro']."
            </button>
        </form></td>";

        echo "<td>".$row['id_autor']."</td>";

        $sql2 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
        $result2 = $mysqli->query($sql2);
    
        while ($row2 = mysqli_fetch_array($result2))
        {
            echo "<td>".$row2['nome_genero']."</td>";
        }

        echo "<td>".$row['editora_livro']."</td>";
        echo "<td>".$row['num_edicao_livro']."</td>";
        echo "<td>".$row['estoque_livro']."</td>";
        echo "<td>".$row['sinopse_livro']."</td>";
        echo "<tr>";
    }
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