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
            width: 200px;
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

    <table border="1" style="width:90%; margin: auto;">
        <tr>
            <th>ID</th>
            <th>Nome do Usuário</th>
            <th>Nome do Livro</th>
            <th>Status</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_movimentacao = $result['id_movimentacao'];
                $id_usuario = $result['id_usuario'];
                $id_livro = $result['id_livro'];
                $id_status_movimentacao = $result['id_status_movimentacao'];

                echo "<tr>";
                echo "<td>".$id_movimentacao."</td>";

                    $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                    $resultad2 = $mysqli->query($sql2);
                
                    while ($row = mysqli_fetch_array($resultad2))
                    { 
                        echo "<td>".$row['nome_usuario']."</td>";
                    }
                    
                    $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                    $resultad3 = $mysqli->query($sql3);
                
                    while ($row3 = mysqli_fetch_array($resultad3))
                    { 
                        echo "<td>".$row3['nome_livro']."</td>";
                    }

                    $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                    $resultad4 = $mysqli->query($sql4);
                
                    while ($row4 = mysqli_fetch_array($resultad4))
                    { 
                    
                        echo "<td>".$row4['nome_status_movimentacao']."</td>";
                    }
                
            };
            
        ?>
    </table>
</body>
</html> 