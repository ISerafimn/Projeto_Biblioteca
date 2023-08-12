<?php
    include('../../include/conexao.php');
    session_start();
    $atualizar = $_SESSION['atualizar'];
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
    <style>
        input::placeholder {
            color: rgb(52, 52, 52);
        }
        input{
            width: 250px;
            color: black;
        }
        input::-webkit-inner-spin-button{
            display: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #1f1919;">
        <?php include('../../include/menu_funcionario_gerenciar.php'); ?>
    </div>

    <br>

    <?php include('../../include/menu_gerenciar_usuario.php'); ?>

    <br>
    
    <p  style="text-align: center;">Digite para selecionar o Usuário que será Atualizado</p>

    
    <form action="#" method="post" style="text-align: center;">
        <input type="text" name="valor">
        <button type="submit" style="background-color: #1f1919; color: white">enviar</button>
    </form>

    <br>

    <table border="1" style="width:80%; margin: auto;">
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

        @$valor = $_POST['valor'];
        if ($valor == ""){
        }
        else{
            
            if($atualizar == 'id_usuario'){

            $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_usuario='$valor'");
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
                echo "</tr></table>";

    ?>
    <h1>Digite as Inforções Atualizadas</h1>

    <form name="Cadastro Usuario" method="post" action="variaveis_atualizar_usuario_exe.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o nome do usuário"></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário"></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o CPF do usuário" role="none"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email_usuario" type="email" size="50" maxlenght="50" placeholder="Digite o E-mail do usuario"></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input name="endereco_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o endereço do usuario"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario"></td>
            </tr>
        </table>
                                
    <?php
                echo "<input type='text' value='".$id_usuario."' name='id_usuario' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
            }
        }
        
        else{
            $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE nome_usuario='$valor'");
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
                echo "</tr></table>";
    ?>

    <h1>Digite as Inforções Atualizadas</h1>

<form name="Cadastro Usuario" method="post" action="variaveis_atualizar_usuario_exe.php">
    <table>
        <tr>
            <td>Nome:</td>
            <td><input name="nome_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o nome do usuário"></td>
        </tr>
        <tr>
            <td>Data de nascimento:</td>
            <td><input name="data_usuario" type="date" placeholder="Digite a data de nascimento do usuário"></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input name="cpf_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o CPF do usuário" role="none"></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input name="email_usuario" type="email" size="50" maxlenght="50" placeholder="Digite o E-mail do usuario"></td>
        </tr>
        <tr>
            <td>Endereço:</td>
            <td><input name="endereco_usuario" type="text" size="50" maxlenght="50" placeholder="Digite o endereço do usuario"></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input name="telefone_usuario" type="number" size="50" maxlenght="50" placeholder="Digite o telefone do usuario"></td>
        </tr>
    </table>
                                
    <?php
                echo "<input type='text' value='".$id_usuario."' name='id_usuario' style='display: none;'>
                        <button type='submit'>Concluir Atualização</button>
                    </form>";
            }
        }
    }
    ?>
</body>
</html>