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
    <link rel="stylesheet" href="../design/index.css">
    <link rel="stylesheet" href="../design/menu.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../design/login-cadastro.css">
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
    <style>
        .container {
            overflow-x: scroll;
            display: flex;
            justify-content: center;
        }
        .item img{
            width: 175px;
            height: 250px;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_pagina_inicial.php');
        include('../include/acessibilidade.php');?>
    </div>

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
    
    <br><br><br><br><br>
    
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>