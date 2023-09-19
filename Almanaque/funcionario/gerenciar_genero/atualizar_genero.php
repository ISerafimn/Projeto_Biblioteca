<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {
?>
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
        <?php include('../../include/menu_funcionario_gerenciar.php');
        include('../../include/acessibilidade.php'); ?>
    </div>

    <br>
    
    <?php include('../../include/menu_gerenciar_genero.php') ?>

    <h1>Atualizar Gênero</h1>
    <br>
    
    <table>
        <form action="atualizando_genero.php" method="post" style="text-align: center;">
            <tr>
                <td>Atualizar: </td>
                <td>
                    <select name="id_genero" style="width: 250px; color: rgb(52, 52, 52)" required>
                    <option value="vo">Gêneros:</option>
                        <?php
                            $sql = "SELECT * FROM genero";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                            {
                                echo "<option value='".$row['id_genero']."'>".$row['nome_genero']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Para: </td>
                <td>
                    <input type="text" name="nome_genero" placeholder="Digite o Nome do Gênero!" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Atualizar</button>
                </td>
            </tr>
        </form>
    </table>

</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>