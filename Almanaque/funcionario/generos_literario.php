<?php
include('../php/protect.php');

if($_SESSION['id_sessao'] == 2) {
?>
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
        <?php include('../include/menu_funcionario.php'); ?>
    </div>
    
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
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>