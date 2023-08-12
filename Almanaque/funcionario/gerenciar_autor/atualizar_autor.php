<?php
    include('../../include/conexao.php');
    session_start();
    $atualizar = $_SESSION['atualizar_autor'];

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
            width: 300px;
        }
        input::placeholder {
            color: rgb(52, 52, 52);
        }
        input{
            width: 250px;
            color: black;
        }
        input::-webkit-inner-spin-button{
            display: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php') ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_autor.php') ?>

    <br>
    
    <p  style="text-align: center;">Digite para selecionar o livro que será Atualizado</p>

    <form action="#" method="post" style="text-align: center;">
        <input type="text" name="valor">
        <button type="submit" style="background-color: #1f1919; color: white">enviar</button>
    </form>
    <br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
    ?>
        <table border="1" style="width:80%; margin: auto;">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
            <th>Data de Nascimento</th>
            <th>Data de Falecimento</th>
        </tr>
        
    <?php
        if($atualizar == "id_autor"){

            include('../php/conexao.php');

            $sql = "SELECT * FROM autor id_autor WHERE id_autor = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_autor = $row['id_autor'];
                echo "<tr>";
                echo "<td>".$id_autor."</td>";
                echo "<td>".$row['nome_autor']."</td>";
                echo "<td>".$row['pais_autor']."</td>";
                echo "<td>".$row['nascimento_autor']."</td>";
                echo "<td>".$row['falecimento_autor']."</td>";
                echo "<tr></table>";

    ?>

    <br>

    <h1>Digite as Inforções Atualizadas</h1>

    <table>
        <form action="atualizando_autor.php" method="post">
            <tr>
                <td>Nome do Autor:</td>
                <td><input type="text" name="nome_autor"></td>
            </tr>
            <tr>
                <td>Nacionalidade:</td>
                <td><input type="text" name="pais_autor"></td>
            </tr> 
            <tr>
                <td>Data de Nascimentp:</td>
                <td><input type="number" name="nascimento_autor"></td>
            </tr>
            <tr>
                <td>Data de Falecimento(opcional):</td>
                <td><input type="number" name="falecimento_autor"></td>
            </tr>
    </table>
                                
    <?php
                echo "<input type='text' value='".$id_autor."' name='id_autor' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
            }
        }
        else{
            include('../php/conexao.php');

            $sql = "SELECT * FROM autor id_autor WHERE nome_autor = '$var'";
            $result = $mysqli->query($sql);
        
            while ($row = mysqli_fetch_array($result))
            {
                $id_autor = $row['id_autor'];
                echo "<tr>";
                echo "<td>".$id_autor."</td>";
                echo "<td>".$row['nome_autor']."</td>";
                echo "<td>".$row['pais_autor']."</td>";
                echo "<td>".$row['nascimento_autor']."</td>";
                echo "<td>".$row['falecimento_autor']."</td>";
                echo "<tr></table>";
    ?>
    
    <br>

    <h1>Digite as Inforções Atualizadas</h1>

    <table>
        <form action="atualizando_autor.php" method="post">
            <tr>
                <td>Nome do Autor:</td>
                <td><input type="text" name="nome_autor"></td>
            </tr>
            <tr>
                <td>Nacionalidade:</td>
                <td><input type="text" name="pais_autor"></td>
            </tr> 
            <tr>
                <td>Data de Nascimentp:</td>
                <td><input type="number" name="nascimento_autor"></td>
            </tr>
            <tr>
                <td>Data de Falecimento(opcional):</td>
                <td><input type="number" name="falecimento_autor"></td>
            </tr>
    </table>
                                
    <?php
                echo "<input type='text' value='".$id_autor."' name='id_autor' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
            }
        }
    }
    ?>
</body>
</html>