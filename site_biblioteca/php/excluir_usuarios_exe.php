<html>
<?php 
include ("conexao.php");

$usuario_nome = $_POST['usuario_nome'];
$sql = mysqli_query($mysqli, "DELETE FROM usuario WHERE usuario_nome='$usuario_nome'");

?>
<html>
<META charset=UFT-8>
<p><a href="index.html">voltar</a>
</html>