<!DOCTYPE html>

<?php
include('conexao.php');
$nome = $_POST['nome'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Consulta</title>
</head>
<body>

<table border="1" style="width:50%">
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>IDADE</th>
    </tr>
    
<?php
$sql = mysqli_query($mysqli, "SELECT  *   FROM    usuario WHERE nome='$nome'");

while ($sql = mysqli_fetch_array ($sql))
 {
    $nome = $sql['nome'];
    $email = $sql['email'];
    $idade = $sql['idade'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$idade."</td>";
    echo "<tr>";
}

echo "</table>";
?>
<p><a href="menu_consultar_usuario.html">voltar</a>
</body>
</html>