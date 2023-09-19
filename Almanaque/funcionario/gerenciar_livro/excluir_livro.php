<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {

    include('../../include/conexao.php');
    $excluir = $_SESSION['excluir'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
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
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php');
        include('../../include/acessibilidade.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_livro.php'); ?>

    <br>
    
    <p  style="text-align: center;">Digite para Consultar</p>

    <form action="#" method="post" style="text-align: center;">
        <input type="text" name="valor">
        <button type="submit" style="background-color: #1f1919; color: white">enviar</button>
    </form>
    <br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
    ?>
        <table border="1" style="width:80%; margin: auto;">
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
        if($excluir == "id_livro"){

            $sql = "SELECT * FROM livro id_livro WHERE id_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['id_livro']."</td>";
                echo "<td><img src='../../imagens/livro_capa/".$row['url_imagem_livro']."'></td>";
                echo "<td>".$row['nome_livro']."</td>";

                $id_autor = $row['id_autor'];
                $id_genero = $row['id_genero'];

                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row2['nome_autor']."</td>";
                    }

                    $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                    
                        echo "<td>".$row3['nome_genero']."</td>";
                    }

                echo "<td>".$row['editora_livro']."</td>";
                echo "<td>".$row['num_edicao_livro']."</td>";
                echo "<td>".$row['estoque_livro']."</td>";
                echo "<td>".$row['sinopse_livro']."</td>";
                echo "<tr></table>";

                echo "<p>Excluir esse Livro?</p>
                        <form action='excluindo_livro.php' method='post'>
                            <input type='text' name='excluindo' value='".$row['id_livro']."' style='display: none;'>
                            <input type='text' name='valor' value='id_livro' style='display: none;'>
                            <button type='submit'>Sim</button>
                        </form>
                        <form action='../index.php'>
                            <button type='submit'>Não</button>
                        </form>";
                

            }
        }
        else{

            $sql = "SELECT * FROM livro id_livro WHERE nome_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>".$row['id_livro']."</td>";
                echo "<td><img src='".$row['url_imagem_livro']."'></td>";
                echo "<td>".$row['nome_livro']."</td>";

                $id_autor = $row['id_autor'];
                $id_genero = $row['id_genero'];

                $sql2 = "SELECT * FROM autor id_autor WHERE id_autor = '$id_autor'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row2 = mysqli_fetch_array($resultad2))
                    { 
                    
                        echo "<td>".$row2['nome_autor']."</td>";
                    }

                    $sql3 = "SELECT * FROM genero id_genero WHERE id_genero = '$id_genero'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                    
                        echo "<td>".$row3['nome_genero']."</td>";
                    }

                echo "<td>".$row['editora_livro']."</td>";
                echo "<td>".$row['num_edicao_livro']."</td>";
                echo "<td>".$row['estoque_livro']."</td>";
                echo "<td>".$row['sinopse_livro']."</td>";
                echo "<tr></table>";

                echo "<p>Excluir esse Livro?</p>
                <form action='excluindo_livro.php' method='post'>
                    <input type='text' name='excluindo' value='".$row['nome_livro']."' style='display: none;'>
                    <input type='text' name='valor' value='nome_livro' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='../index.php'>
                    <button type='submit'>Não</button>
                </form>";
            }
        }
    }
    ?>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>