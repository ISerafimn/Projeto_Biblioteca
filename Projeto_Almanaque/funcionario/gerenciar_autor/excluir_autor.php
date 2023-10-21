<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {

    $excluir_autor = $_SESSION['excluir_autor'];

include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Excluir Autor</title>
    <style>
    @media screen and (max-width: 500px) {
        section{
            display: grid;
            grid-template-columns: auto auto;
        }
        
    }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_autor_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Excluir</h1><br>
    
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
    
    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>