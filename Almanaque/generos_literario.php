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
    <?php include('include/menu_pagina_inicial.php'); ?>
    
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