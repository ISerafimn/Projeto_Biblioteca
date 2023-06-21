<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../design/autor.css">
    <title>Teste</title>
</head>
<body>
    <ul>
        <li class="dropdown"><a>Autores</a>
            <div class="dp-menu">
                <form action="teste02.php" method="post">    
                    <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM autor";
                        $resultad = $mysqli->query($sql);
                        while ($row = mysqli_fetch_array($resultad))
                            {
                                echo "<input type='radio' name='valor' value='".$row['nome_autor']."' required>".$row['nome_autor']."<br>";
                            }
                        ?>
            </div>
                <br><br><br><br><br><br><br>
                <input type="radio" value="1" required name="sexo">Masculino
                <input type="radio" value="0" required name="sexo"> Feminino

            <button type="submit">Enviar</button>
                </form>
        </li>
    </ul>
</body>
</html>