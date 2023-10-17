<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
$consultar = $_SESSION['consultar'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Adicionar</title>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_livro_gerenciar.php'); ?> <br><br>
    
    <p  style="text-align: center;">Digite para Consultar</p>

<form action="#" method="post" style="text-align: center;">
    <input type="text" name="valor" required>
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
    if($consultar == "id_livro"){

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
            echo "<tr>";
        }
    }
    elseif($consultar == "nome_livro"){

        $sql = "SELECT * FROM livro id_livro WHERE nome_livro = '$var'";
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
            echo "<tr>";
        }
    }
    elseif($consultar == "id_autor"){

        $sql4 = "SELECT * FROM autor nome_autor WHERE nome_autor = '$var'";
        $result4 = $mysqli->query($sql4);
    
        while ($row4 = mysqli_fetch_array($result4)){
            $var = $row4['id_autor'];
        }

        $sql = "SELECT * FROM livro id_autor WHERE id_autor = '$var'";
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
            echo "<tr>";
        }
    }
    elseif($consultar == "editora_livro"){
        
        $sql = "SELECT * FROM livro id_livro WHERE editora_livro = '$var'";
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
            echo "<tr>";
        }
    }
    elseif($consultar == "genero_livro"){

        $sql4 = "SELECT * FROM genero nome_genero WHERE nome_genero = '$var'";
        $result4 = $mysqli->query($sql4);
    
        while ($row4 = mysqli_fetch_array($result4)){
            $var = $row4['id_genero'];
        }

        $sql = "SELECT * FROM livro id_genero WHERE id_genero = '$var'";
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
            echo "<tr>";
        }
    }
}
?>
</table>

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