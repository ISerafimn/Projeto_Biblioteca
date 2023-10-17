<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
$atualizar = $_SESSION['atualizar'];
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
    

    <p  style="text-align: center;">Digite para selecionar o livro que será Atualizado</p>

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
        if($atualizar == "id_livro"){

            $sql = "SELECT * FROM livro id_livro WHERE id_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_livro = $row['id_livro'];
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


    ?>
    <h1>Digite as Inforções Atualizadas</h1>

    <form method="post" action="php/variaveis_atualizando_livro.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_livro" type="text" placeholder="Digite o nome do livro"></td>
            </tr>
            <tr>
                <td>Autores:</td>
                <td>
                    <select name="name" style="width: 250px; color: rgb(52, 52, 52)">
                        <option>Autores:</option>
                        <?php
                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                }
                        ?>
                    </select>
                </td>
                <td><a href="../gerenciar_autor/adicionar_autor.php">Adicionar Autor</a></td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td>
                    <select name="id_genero" style="width: 250px; color: rgb(52, 52, 52)">
                            <option>Generos:</option>
                            <?php
                                include('../../include/conexao.php');
                                $sql2 = "SELECT * FROM genero";
                                $resultad2 = $mysqli->query($sql2);
                                while ($row2 = mysqli_fetch_array($resultad2))
                                    {
                                        echo "<option value='".$row2['id_genero']."'>".$row2['nome_genero']."</option>";
                                    }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Editora:</td>
                <td><input name="editora_livro" type="text" placeholder="Digite o nome da editora"></td>
            </tr>
            <tr>
                <td>Número da Edição:</td>
                <td><input name="num_edicao_livro" type="number" placeholder="Digite o número da edição"></td>
            </tr>
                <td>Sinopse:</td>
                <td><input name="sinopse_livro" type="text" placeholder="Digite a sinopse do livro"></td>
            </tr>
            <tr>
                <td>Estoque:</td>
                <td><input name="estoque_livro" type="number" placeholder="Digite o número de livros no estoque"></td>
            </tr>
            <tr>
                <td>Url da Capa</td>
                <td><input type="file" name="imagem"></td>
            </tr>
        </table>
        <br>
                                
    <?php
                echo "<input type='text' value='".$id_livro."' name='id_livro' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
            }
        }
        else{

            $sql = "SELECT * FROM livro id_livro WHERE nome_livro = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_livro = $row['id_livro'];
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

    ?>

    <h1>Digite as Inforções Atualizadas</h1>

    <form method="post" action="php/variaveis_atualizando_livro.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_livro" type="text" placeholder="Digite o nome do livro"></td>
            </tr>
            <tr>
                <td>Autores:</td>
                <td>
                    <select name="name" style="width: 250px; color: rgb(52, 52, 52)">
                        <option>Autores:</option>
                        <?php
                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {
                                    echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                }
                        ?>
                    </select>
                </td>
                <td><a href="../gerenciar_autor/adicionar_autor.php">Adicionar Autor</a></td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td>
                    <select name="id_genero" style="width: 250px; color: rgb(52, 52, 52)">
                            <option>Generos:</option>
                            <?php
                                include('../../include/conexao.php');
                                $sql2 = "SELECT * FROM genero";
                                $resultad2 = $mysqli->query($sql2);
                                while ($row2 = mysqli_fetch_array($resultad2))
                                    {
                                        echo "<option value='".$row2['id_genero']."'>".$row2['nome_genero']."</option>";
                                    }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Editora:</td>
                <td><input name="editora_livro" type="text" placeholder="Digite o nome da editora"></td>
            </tr>
            <tr>
                <td>Número da Edição:</td>
                <td><input name="num_edicao_livro" type="number" placeholder="Digite o número da edição"></td>
            </tr>
                <td>Sinopse:</td>
                <td><input name="sinopse_livro" type="text" placeholder="Digite a sinopse do livro"></td>
            </tr>
            <tr>
                <td>Estoque:</td>
                <td><input name="estoque_livro" type="number" placeholder="Digite o número de livros no estoque"></td>
            </tr>
            <tr>
                <td>Url da Capa</td>
                <td><input type="file" name="imagem"></td>
            </tr>
        </table>
        <br>
                                
    <?php
                echo "<input type='text' value='".$id_livro."' name='id_livro' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
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