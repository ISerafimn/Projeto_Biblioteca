<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {

    include('../../include/conexao.php');
    $consultar = $_SESSION['consultar'];
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
        <?php include('../../include/menu_funcionario_gerenciar.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_movimentacao.php'); ?>

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
            <th>Data do Retorno</th>
            <th>Status</th>
        </tr>
        
    <?php
        if($consultar == "id_usuario"){

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
                    echo "<td><form method='post' action='movimentacao_aberto.php'>
                    <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                        <button type='submit' name='Submit' style='border: none; background-color:  ;'>
                            ".$id_movimentacao."
                        </button>
                    </form></td>";

                    echo "<td><form method='post' action='movimentacao_aberto.php'>
                    <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                        <button type='submit' name='Submit' style='border: none; background-color:  ;'>
                            ".$nome_usuario."
                        </button>
                    </form></td>";

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
        }
        elseif($consultar == "nome_usuario"){

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
        }
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