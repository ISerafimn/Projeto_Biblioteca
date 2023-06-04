<?php
include('conexao.php');
$genero = $_POST ['genero'];
$sql = "SELECT * FROM livros livros_id WHERE genero_id = '$genero'";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <table style border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>N° da Edição</th>
    </tr>

<?php
    while ($row = mysqli_fetch_array($result))
    { 
        echo "<tr>";
        echo "<td>".$row['livros_id']."</td>";
        echo "<td>".$row['livros_nome']."</td>";
        echo "<td>".$row['autor_id']."</td>";
        echo "<td>".$row['livro_editoria']."</td>";
        echo "<td>".$row['livro_num_edicao']."</td>";
        echo "<tr>";
    }
?>
    </table>
</body>
</html>