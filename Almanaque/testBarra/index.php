<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de busca</title>
</head>
<body>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table width="500px" border="1">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="3">Digite algo para pesquisar</td>
        </tr>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * FROM veiculos WHERE fabricante LIKE '%$pesquisa%' OR modelo LIKE '%$pesquisa%' OR ano LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);

            if ($sql_query->num_rows == 0 or $pesquisa == '') {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['fabricante']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['ano']; ?></td>
                    </tr>
                    <?php
                }
            }
            
        } ?>
    </table>
</body>
</html>