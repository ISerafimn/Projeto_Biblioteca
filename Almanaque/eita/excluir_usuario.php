<?php

include('../php/conexao.php');

$id_usuario = $_POST['id_usuario'];

$query = "DELETE FROM usuario WHERE id_usuario = ?";
$stmt = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($stmt, "i", $id_usuario);
mysqli_stmt_execute($stmt);
$num_rows = mysqli_stmt_affected_rows($stmt);

if ($num_rows > 0) {
    echo "<p>Usuário com ID $id_usuario foi excluído com sucesso.</p>";
} else {
    echo "<p>Nenhum usuário encontrado para o ID $id_usuario. Nenhum registro foi excluído.</p>";
}

echo '<a href="consultarID.html">Voltar</a>';

?>