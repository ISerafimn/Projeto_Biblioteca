<?php
include('../php/protect.php');
    
if($_SESSION['id_sessao'] == 1) {
        
$email_usuario = $_SESSION['email_usuario'];
    
include('../include/conexao.php');
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Perfil</title>
</head>
<body>
    <?php include('../include/import_menu_logado.php'); ?>

    <br><br><br><br><br>

    <table border="1" style="width:50%; margin: auto;">
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>NASCIMENTO</th>
            <th>CPF</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email_usuario = '$email_usuario'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_usuario = $result['id_usuario'];
                $nome_usuario = $result['nome_usuario'];
                $email_usuario = $result['email_usuario'];
                $data_usuario = $result['data_usuario'];
                $cpf_usuario = $result['cpf_usuario'];
                $endereco_usuario = $result['endereco_usuario'];
                $telefone_usuario = $result['telefone_usuario'];
                echo "<tr>";
                echo "<td>".$nome_usuario."</td>";
                echo "<td>".$email_usuario."</td>";
                echo "<td>".$data_usuario."</td>";
                echo "<td>".$cpf_usuario."</td>";
                echo "<td>".$endereco_usuario."</td>";
                echo "<td>".$telefone_usuario."</td>";
                echo "<tr>";
            };
            
            $_SESSION['id_usuario'] = $id_usuario;
        ?>

    </table>
    
    <br>
    
    <ul>
        <li style="text-align: center;"><a href="atualizar_usuario.php">Atualizar os Dados</a></li>
    </ul>

    <br><br><br><br>

    <?php include('../include/import_footer_logado.php');
    include('../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>