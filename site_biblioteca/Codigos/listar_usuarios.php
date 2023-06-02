<?php
include('conexao.php');
$sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>TELEFONE</th>
    </tr>

<?php
    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['id_usuario']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['idade']."</td>";
        echo "<tr>";
           }

?>
    </table>

<p><a href="index.html">voltar</a>
</body>
</html>