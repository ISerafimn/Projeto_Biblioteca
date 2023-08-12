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
        <?php include('../../include/menu_funcionario_gerenciar.php') ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_autor.php') ?>
    
    <h1>Atualizar Livro Por:</h1>
    
    <form method="post" action="variaveis_autor_livro.php">
        <input name="atualizar_autor" value="id_autor" style="display: none;">
        <button type="submit" name="Submit">Id</button>
    </form>
    <form method="post" action="variaveis_autor_livro.php">
        <input name="atualizar_autor" value="nome_autor" style="display: none;">
        <button type="submit" name="Submit">Nome</button>
    </form>
</body>
</html>