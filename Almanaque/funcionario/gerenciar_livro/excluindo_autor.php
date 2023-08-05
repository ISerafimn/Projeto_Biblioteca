
<?php
include('../php/conexao.php');

if(isset($_POST['id_autor'])) {
    $id_autor = $_POST['id_autor'];

    $query = "DELETE FROM autor WHERE id_autor = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_autor);
    mysqli_stmt_execute($stmt);
    $num_rows = mysqli_stmt_affected_rows($stmt);

    if ($num_rows > 0) {
        echo "<p>Autor com ID $id_autor foi excluído com sucesso.</p>";
    } else {
        echo "<p>Nenhum autor encontrado para o ID $id_autor. Nenhum registro foi excluído.</p>";
    }
}

?>