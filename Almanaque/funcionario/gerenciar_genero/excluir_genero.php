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
        <?php include('../../include/menu_funcionario_gerenciar.php') ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_genero.php') ?>
    
    <h1>Excluir Gênero</h1>
    <br>
    
    <table>
        <form action="#" method="post" style="text-align: center;">
            <tr>
                <td>Excluir: </td>
                <td>
                    <select name="nome_genero" style="width: 250px; color: rgb(52, 52, 52)" required>
                    <option value="voltar">Gêneros:</option>
                        <?php
                            $sql = "SELECT * FROM genero";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                            {
                                echo "<option value='".$row['nome_genero']."'>".$row['nome_genero']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Selecionar</button>
                </td>
            </tr>
        </form>
    </table>
        
    <?php
        @$nome_genero = $_POST['nome_genero'];
        if(isset($_POST['nome_genero'])){
            echo "Tem certeza que deseja deletar o Gênero ".$nome_genero."?";
            ?>
            <table>
                <form action="excluindo_genero.php" method="post">
                    <input type="text" name="nome_genero_confirmado" value="<?php echo $nome_genero; ?>" style="display: none;">
                    <tr>
                        <td>
                            <button type="submit">SIM</button>
                        </td>
                    </tr>
                </form>
                <form action="genero_lista.php">
                    <tr>
                        <td>
                            <button type="submit">Não</button>
                        </td>
                    </tr>
                </form>
            </table>
    <?php
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