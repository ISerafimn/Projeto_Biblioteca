<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?> <br>
     <?php
        if($_SESSION['adm'] == 1) {
            echo "Nivel de usuario: Administrador"; 
        } else {
            echo "Nivel de usuario: Comum";
        }
     ?>
    <p>
    
        <a href="logout.php">Sair</a> 
    </p>
</body>
</html>