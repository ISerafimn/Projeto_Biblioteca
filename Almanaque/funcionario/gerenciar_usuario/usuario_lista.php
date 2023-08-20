<?php
include('../../php/protect.php');

if($_SESSION['id_sessao'] == 2) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_usuario.php'); ?>
    
    <br>

    <table border="1" style="width:90%; margin: auto;">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>DATA DE NASCIMENTO</th>
        <th>CPF</th>
        <th>ENDEREÇO</th>
        <th>TELEFONE</th>
    </tr>

    <?php

        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo "<tr>";
            echo "<td>".$id_usuario."</td>";
            echo "<td>".$nome_usuario."</td>";
            echo "<td>".$email_usuario."</td>";
            echo "<td>".$cpf_usuario."</td>";
            echo "<td>".$data_usuario."</td>";
            echo "<td>".$endereco_usuario."</td>";
            echo "<td>".$telefone_usuario."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>