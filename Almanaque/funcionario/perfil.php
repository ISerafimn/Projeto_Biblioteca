<?php
include('../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {

    $email_funcionario = $_SESSION['email_funcionario']; 
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
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almanaque</title>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../include/menu_funcionario.php'); ?>
    </div>

    <br><br><br><br><br>

    <table border="1" style="width:50%; margin: auto;">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>NASCIMENTO</th>
            <th>CPF</th>
        </tr>

        <?php
        $sql = mysqli_query($mysqli, "SELECT  *   FROM  funcionario WHERE email_funcionario ='$email_funcionario'");
        while ($result = mysqli_fetch_array($sql))

            {
                $id_funcionario = $result['id_funcionario'];
                $nome_funcionario= $result['nome_funcionario'];
                $email_funcionario= $result['email_funcionario'];
                $data_funcionario= $result['data_funcionario'];
                $cpf_funcionario= $result['cpf_funcionario'];
                echo "<tr>";
                echo "<td>".$id_funcionario."</td>";
                echo "<td>".$nome_funcionario."</td>";
                echo "<td>".$email_funcionario."</td>";
                echo "<td>".$data_funcionario."</td>";
                echo "<td>".$cpf_funcionario."</td>";
                echo "<tr>";
            };
            
            $_SESSION['id_funcionario'] = $id_funcionario;
        ?>

    </table>
    
    <br>
    
        <ul>
        <li style="text-align: center;"><a href="atualizar_funcionario.html">Atualizar os Dados</a></li>
        </ul>
    </div>
    
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>