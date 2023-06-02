<html>
<html>
<?php 
include ("conexao.php");

$usuario_id = $_POST['usuario_id'];
$sql = mysqli_query($mysqli, "DELETE FROM usuario WHERE usuario_id='$usuario_id'");

?>
<html>
<META charset=UFT-8>
<p><a href="index.html">voltar</a>
</html>