<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        .genero input{
            display: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_usuario.php'); ?>
    </div>
    
    <h1>GÊNEROS LITERARIOS</h1>
    
    <div class="genero">
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="1">
            <button type="submit" name="Submit">Romance</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="2">
            <button type="submit" name="Submit">Fantasia</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="3">
            <button type="submit" name="Submit">Poesia</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="4">
            <button type="submit" name="Submit">Romance</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="5">
            <button type="submit" name="Submit">Conto</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="6">
            <button type="submit" name="Submit">Terror</button>
        </form>
        <form method="post" action="php/lista_genero.php">
            <input name="genero" value="7">
            <button type="submit" name="Submit">Ação e Aventura</button>
        </form>
    </div>

</body>
</html>