<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Categorias</title>
    <style>
        .lista-genero{
            margin: auto;
            width: 300px;
        }
        .lista-genero button{
            width: 300px;
            height: 50px;
            border: none;
            margin-bottom: 10px;
            background-color: white;
        }
        .lista-genero button:hover{
            background-color: #276daf;
            color: white;
        }
    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

    <h1 style="text-align: center;">CATEGORIAS LITERARIAS</h1>

    <br>
    
    <div class="lista-genero">
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
    </div>
    
    <br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php'); ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>