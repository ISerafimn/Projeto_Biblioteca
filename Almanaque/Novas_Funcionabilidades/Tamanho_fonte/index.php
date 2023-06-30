<?php
    include('conexao.php');
    session_start();
    $tamanho_fonte = $_SESSION['tamanho_fonte'];

    echo"Tamamho da Fonte Atual: $tamanho_fonte";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        body{
            font-size: <?php echo "$tamanho_fonte" ?>;
        }
        li{
            display: inline-block;
        }
    </style>
</head>
<body>
    <p>Selecione se quer aumentar ou diminuir a Fonte</p>

    <ul>
        <li>
            <form action="teste.php" method="post">
                <input type="number" name="aumentar" value="1" style="display: NONE;">
                <input type="number" name="diminuir" value="0" style="display: NONE;">
                <button type="submit">A+</button>
            </form>
        </li>
        <li>
            <form action="teste.php" method="post">
                <input type="number" name="aumentar" value="0" style="display: NONE;">
                <input type="number" name="diminuir" value="1" style="display: NONE;">
                <button type="submit">A-</button>
            </form>
        </li>
    </ul>

    <h1>TESTANDO O TAMANHO DAS LETRAS</h1>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ducimus asperiores possimus cumque. Exercitationem blanditiis iusto, nulla repellendus sapiente quisquam officia alias culpa veniam quam cumque in, accusantium asperiores esse!
    </p>
</body>
</html>