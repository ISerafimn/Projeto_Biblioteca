<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {

    include('../../include/conexao.php');
    $excluir_autor = $_SESSION['excluir_autor'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../design/index.css">
    <link rel="stylesheet" href="../../design/menu.css">
    <link rel="shortcut icon" href="../../imagem/" type="image/x-icon">
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
        if($excluir_autor == "id_autor"){

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
                                
    <?php
                echo "<p>Excluir esse Autor?</p>
                <form action='excluindo_autor.php' method='post'>
                    <input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>
                    <input type='text' name='valor' value='id_autor' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='lista_autor.php'>
                    <button type='submit'>Não</button>
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
                                
    <?php
                echo "<p>Excluir esse Autor?</p>
                <form action='excluindo_autor.php' method='post'>
                    <input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>
                    <input type='text' name='valor' value='id_autor' style='display: none;'>
                    <button type='submit'>Sim</button>
                </form>
                <form action='lista_autor.php'>
                    <button type='submit'>Não</button>
                </form>";
            }
        }
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