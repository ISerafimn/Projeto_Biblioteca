<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gêneros Literarios</title>
    <style>
        .genero input{
            display: none;
        }
    </style>
</head>
<body>
    <?php include('include/menu_pagina_inicial.php');
        include('include/acessibilidade.php');?>
    
    <h1>GÊNEROS LITERARIOS</h1>
    
    <?php
        $sql = "SELECT * FROM genero";
        $resultad = $mysqli->query($sql);
             while ($row = mysqli_fetch_array($resultad))
                {
                    echo    "<form method='post' action='lista_genero.php'>
                                <input name='id_genero' value='".$row['id_genero']."' style='display: none;'>
                                <button type='submit' name='Submit'>
                                    ".$row['nome_genero']."
                                </button>
                            </form>";
                }
    ?>
</body>
</html>