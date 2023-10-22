<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    $caminho = $_SESSION['caminho'];
    $atualizar_por = $_SESSION['atualizar_por'];
    $consultar = $_SESSION['consultar'];
include('../../include/conexao.php');
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
    <title>Livro Lista</title>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_movimentacao_gerenciar.php'); ?>
    
    <br>

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
        <th>Nome do Usuário</th>
        <th>Nome do Livro</th>
        <th>Data da Saída</th>
        <th>Data Limite</th>
        <th>Data Volta</th>
        <th>Status</th>
    </tr>
    
<?php
    if($atualizar_por == "id_usuario"){

        $sql = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$var'";
        $result = $mysqli->query($sql);
        
        while ($row = mysqli_fetch_array($result))
        { 
            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];

            $sql2 = "SELECT * FROM movimentacao id_usuario WHERE id_usuario = '$id_usuario'";
            $result2 = $mysqli->query($sql2);
            
            while ($row2 = mysqli_fetch_array($result2))
            { 
                $id_movimentacao = $row2['id_movimentacao'];

                echo "<tr>";
                echo "<td>".$id_movimentacao."</td>";
                echo "<td>".$nome_usuario."</td>";

                $id_livro = $row2['id_livro'];

                $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                $result3 = $mysqli->query($sql3);
        
                    while ($row3 = mysqli_fetch_array($result3))
                    {
                        echo "<td>".$row3['nome_livro']."</td>";
                    }

                echo "<td>".$row2['data_saida_movimentacao']."</td>";
                echo "<td>".$row2['data_limite_movimentacao']."</td>";
                echo "<td>".$row2['data_volta_movimentacao']."</td>";

                $id_status_movimentacao = $row2['id_status_movimentacao'];

                $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                $result4 = $mysqli->query($sql4);
        
                    while ($row4 = mysqli_fetch_array($result4))
                    {
                        echo "<td>".$row4['nome_status_movimentacao']."</td>";
                        echo "</tr>";
                    }
            }
        }
        if($caminho == 'saida')
        {
?>
        <table>
            <h1>Saída de Livros</h1>
            <form action="variaveis_atualizando_movimentacao.php" method="post">

                <tr>
                    <td>Selecione o livro que está saindo</td>
                    <td>
                        <select name="id_movimentacao" style="width: 250px; color: rgb(52, 52, 52)">
                                <?php
                                    $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario'";
                                    $resultad = $mysqli->query($sql);
                                    while ($row = mysqli_fetch_array($resultad))
                                    {   
                                        $id_livro2 = $row['id_livro'];

                                        $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                        $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                        echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."</option>";
                                    }
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Selecione a limite de retorno do livro</td>
                    <td><input type="date" name="data_limite_movimentacao"></td>
                </tr>
                    <input type="number" name="id_status_movimentacao" value="1" style="display: none;">
                <tr>
                    <td colspan="2"><button type="submit">Livro Entregue</button></td>
                </tr>
            </form>
        </table>

<?php

        }
        else{
            ?>
            <table>
            <h1>Volta de Livros</h1>
            <form action="variaveis_atualizando_movimentacao.php" method="post">

                <tr>
                    <td>Selecione o livro que está voltando</td>
                    <td>
                        <select name="id_movimentacao" style="width: 250px; color: rgb(52, 52, 52)">
                                <?php
                                    $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario'";
                                    $resultad = $mysqli->query($sql);
                                    while ($row = mysqli_fetch_array($resultad))
                                    {   
                                        $id_livro2 = $row['id_livro'];

                                        $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                        $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                        echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."</option>";
                                    }
                                ?>
                        </select>
                    </td>
                </tr>
                    <input type="number" name="id_status_movimentacao" value="3" style="display: none;">
                <tr>
                    <td colspan="2"><button type="submit">Livro Retornado</button></td>
                </tr>
            </form>
        </table>

        <?php
        }
    }
    else{

        $sql = "SELECT * FROM usuario nome_usuario WHERE nome_usuario = '$var'";
        $result = $mysqli->query($sql);
        
        while ($row = mysqli_fetch_array($result))
        { 
            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];

            $sql2 = "SELECT * FROM movimentacao id_usuario WHERE id_usuario = '$id_usuario'";
            $result2 = $mysqli->query($sql2);
            
            while ($row2 = mysqli_fetch_array($result2))
            { 
                echo "<tr>";
                echo "<td>".$row2['id_movimentacao']."</td>";
                echo "<td>".$nome_usuario."</td>";

                $id_livro = $row2['id_livro'];

                $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                $result3 = $mysqli->query($sql3);
        
                    while ($row3 = mysqli_fetch_array($result3))
                    {
                        echo "<td>".$row3['nome_livro']."</td>";
                    }

                echo "<td>".$row2['data_saida_movimentacao']."</td>";
                echo "<td>".$row2['data_limite_movimentacao']."</td>";
                echo "<td>".$row2['data_volta_movimentacao']."</td>";

                $id_status_movimentacao = $row2['id_status_movimentacao'];

                $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                $result4 = $mysqli->query($sql4);
        
                    while ($row4 = mysqli_fetch_array($result4))
                    {
                        echo "<td>".$row4['nome_status_movimentacao']."</td>";
                        echo "</tr>";
                    }
            }
        }
        if($caminho == 'saida')
        {
        ?>
        <table>
            <h1>Saída de Livros</h1>
            <form action="variaveis_atualizando_movimentacao.php" method="post">

                <tr>
                    <td>Selecione o livro que está saindo</td>
                    <td>
                        <select name="id_movimentacao" style="width: 250px; color: rgb(52, 52, 52)">
                                <?php
                                    $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario'";
                                    $resultad = $mysqli->query($sql);
                                    while ($row = mysqli_fetch_array($resultad))
                                    {   
                                        $id_livro2 = $row['id_livro'];

                                        $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                        $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                        echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."</option>";
                                    }
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Selecione a limite de retorno do livro</td>
                    <td><input type="date" name="data_limite_movimentacao"></td>
                </tr>
                    <input type="number" name="id_status_movimentacao" value="1" style="display: none;">
                <tr>
                    <td colspan="2"><button type="submit">Livro Entregue</button></td>
                </tr>
            </form>
        </table>

<?php
        }
        else{
            ?>
            <table>
            <h1>Volta de Livros</h1>
            <form action="variaveis_atualizando_movimentacao.php" method="post">

                <tr>
                    <td>Selecione o livro que está voltando</td>
                    <td>
                        <select name="id_movimentacao" style="width: 250px; color: rgb(52, 52, 52)">
                                <?php
                                    $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario'";
                                    $resultad = $mysqli->query($sql);
                                    while ($row = mysqli_fetch_array($resultad))
                                    {   
                                        $id_livro2 = $row['id_livro'];

                                        $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                        $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                        echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."</option>";
                                    }
                                ?>
                        </select>
                    </td>
                </tr>
                    <input type="number" name="id_status_movimentacao" value="3" style="display: none;">
                <tr>
                    <td colspan="2"><button type="submit">Livro Retornado</button></td>
                </tr>
            </form>
        </table>

        <?php
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