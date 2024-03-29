<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {

    if(isset($_SESSION['consultar'])) {
    $consultar = $_SESSION['consultar'];
    }
    if(isset($_SESSION['excluir'])) {
        $excluir = $_SESSION['excluir'];
    }
include('../../include/conexao.php');

if(isset($_SESSION['modal_texto'])){
    $modal_texto = $_SESSION['modal_texto'];
    unset($_SESSION['modal_texto']);
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Exclusão Inválida</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="color: black;">
            <?php
            echo "$modal_texto";
            ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin:auto; background-color: #276daf;">Fechar</button>
        </div>
        </div>
    </div>
</div>

<?php
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu_gerenciar.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Excluir Usuário</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .info-container {
            font-size: 14px;
            color: black;
            margin: auto;
            padding: 10px;  
            display: flex;
            margin: 10px;
            background-color: white;
            border-radius: 10px;
        }
        @media screen and (max-width: 500px) {
            .atributo_th, .atributo_td{
                padding-left: 2px;
                padding-right: 2px;
            }
            .id_th, .id_td{
                text-align: center;
                padding-left: 2px;
                padding-right: 2px;
                border: solid;
            }
        }
    .forms{
        background-color: white;
        margin-right: 20%;
        margin-left: 20%;
        border-radius: 20px;
        color: black;
        text-align: center;
    }
    .forms button, .forms a{
        color: #fff;
        border-radius: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 50px;
        padding-right: 50px;
        margin-right: 30px;
        border: none;
        font-size: 1rem;
        font-weight: 400;
        background-color: #276daf;
        transition: all .50s ease;
    }
    .forms button:hover, .forms a:hover{
        background-color: #235d92;
    }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_usuario_gerenciar.php'); ?>
    
    <br>
    
    <h1 style="text-align: center;">Excluir</h1><br>
    
    <p style="text-align: center; margin-bottom: 12px;">Digite para selecionar o Usuário que será Excluido</p>

    <form action="#" method="post">
        <div class="search-icon">
            <input type="text" placeholder="Pesquisar!" name="valor" required>
            <button type="submit" class="icon"><i class="ri-search-line"></i></button>
        </div>
    </form>

<br>

<?php

    @$valor = $_POST['valor'];
    if ($valor == ""){
    }
    else{

        ?>

    <div class='info-container'>
        <table>
            <tr>
                <th class="atributo_th">Nome do Usuário e ID</th>
                <th class="atributo_th">Email</th>
                <th class="atributo_th">Nascimento</th>
                <th class="atributo_th">CPF</th>
                <th class="atributo_th">Endereço</th>
                <th class="atributo_th">Telefone</th>
            </tr>

        <?php

        
        if($excluir == 'id_usuario'){

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
            echo "<td class='atributo_td'>".$nome_usuario." (".$id_usuario.")</td>";
            echo "<td class='atributo_td'>".$email_usuario."</td>";
            echo "<td class='atributo_td'>".$data_usuario."</td>";
            echo "<td class='atributo_td'>".$cpf_usuario."</td>";
            echo "<td class='atributo_td'>".$endereco_usuario."</td>";
            echo "<td class='atributo_td'>".$telefone_usuario."</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div><br>";

        ?>
        <div class="forms">
            <form  action='php/excluindo_usuario.php' method='post' style="margin-top: 0px;">
                <h1 style="color: black; text-align: center;">Excluir esse Usuário?</h1><br>
                <?php echo "<input type='text' name='excluindo' value='".$nome_usuario."' style='display: none;'>"; ?>
                <input type='text' name='valor' value='nome_usuario' style='display: none;'>       
                <button type='submit'>Sim</button><a href="usuario_lista.php">Não</a>
            </form><br>
        </div><br><br>                            
        <?php

        }
    }
    
    else{
        $resultado = mysqli_query($mysqli, "SELECT * FROM usuario WHERE nome_usuario LIKE '%$valor%'");
        while ($row = mysqli_fetch_assoc($resultado)) {

            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email_usuario = $row['email_usuario'];
            $cpf_usuario = $row['cpf_usuario'];
            $data_usuario = $row['data_usuario'];
            $endereco_usuario = $row['endereco_usuario'];
            $telefone_usuario = $row['telefone_usuario'];

            echo "<tr>";
            echo "<td class='atributo_td'>".$nome_usuario." (".$id_usuario.")</td>";
            echo "<td class='atributo_td'>".$email_usuario."</td>";
            echo "<td class='atributo_td'>".$data_usuario."</td>";
            echo "<td class='atributo_td'>".$cpf_usuario."</td>";
            echo "<td class='atributo_td'>".$endereco_usuario."</td>";
            echo "<td class='atributo_td'>".$telefone_usuario."</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div><br>";

        ?>
        <div class="forms">
            <form  action='php/excluindo_usuario.php' method='post' style="margin-top: 0px;">
                <h1 style="color: black; text-align: center;">Excluir esse Usuário?</h1><br>
                <?php echo "<input type='text' name='excluindo' value='".$nome_usuario."' style='display: none;'>"; ?>
                <input type='text' name='valor' value='nome_usuario' style='display: none;'>       
                <button type='submit'>Sim</button><a href="usuario_lista.php">Não</a>
            </form><br>
        </div><br><br>                            
        <?php

        }
    }
}
?>

    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <script src="../../js/modal_pop.js"></script>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>