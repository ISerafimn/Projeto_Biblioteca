<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {

    $excluir_autor = $_SESSION['excluir_autor'];

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
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Excluir Autor</title>
    <style>
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

    @media screen and (max-width: 500px) {
        section{
            display: grid;
            grid-template-columns: auto auto;
        }
        
    }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_autor_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Excluir</h1><br>
    
    <p style="text-align: center; margin-bottom: 12px;">Digite para selecionar o Autor que será excluido</p>

    <form action="#" method="post">
        <div class="search-icon">
            <input type="text" placeholder="Pesquisar!" name="valor" required>
            <button type="submit" class="icon"><i class="ri-search-line"></i></button>
        </div>
    </form>

<br>
<?php
@$var = $_POST['valor'];
if ($var == ""){
}
else{
?>
    <table>
        <tr>
            <th class="id_th">ID</th>
            <th class="atributo_th">Nome</th>
            <th class="atributo_th">Nacionalidade</th>
        </tr>
    
<?php
    if($excluir_autor == "id_autor"){

        $sql = "SELECT * FROM autor id_autor WHERE id_autor = '$var'";
        $result = $mysqli->query($sql);
    
        while ($row = mysqli_fetch_array($result))
        {
            $id_autor = $row['id_autor'];
            $nome_autor = $row['nome_autor'];
            $pais_autor = $row['pais_autor'];
            $nascimento_autor = $row['nascimento_autor'];
            $falecimento_autor = $row['falecimento_autor'];
            $icon = "";
            if($falecimento_autor != ""){
                $icon = " - ";
            }
            ?>
            
            <?php
            echo "<tr>";
            echo "<td class='id_th'>".$id_autor."</td>";
            echo "<td class='atributo_th'>".$nome_autor." (".$nascimento_autor, $icon, $falecimento_autor.")</td>";
            echo "<td class='atributo_th'>".$pais_autor."</td>";
            echo "</tr>";
            echo "</table>";

?>

            <br>
                <div class="forms">
                    <form  action='php/excluindo_autor.php' method='post' style="margin-top: 0px;">
                        <h2 style="color: black; text-align: center;">Excluir esse Autor?</h2><br>
                        <?php echo "<input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>"; ?>
                        <input type='text' name='valor' value='id_autor' style='display: none;'>       
                        <button type='submit'>Sim</button><a href="livro_lista.php">Não</a>
                    </form><br>
                </div>                  
<?php
        }
    }
    else{
        $sql = "SELECT * FROM autor id_autor WHERE nome_autor LIKE '%$var%'";
        $result = $mysqli->query($sql);
    
        while ($row = mysqli_fetch_array($result))
        {
            $id_autor = $row['id_autor'];
            $nome_autor = $row['nome_autor'];
            $pais_autor = $row['pais_autor'];
            $nascimento_autor = $row['nascimento_autor'];
            $falecimento_autor = $row['falecimento_autor'];
            $icon = "";
            if($falecimento_autor != ""){
                $icon = " - ";
            }

            echo "<tr>";
            echo "<td class='id_th'>".$id_autor."</td>";
            echo "<td class='atributo_th'>".$nome_autor." (".$nascimento_autor, $icon, $falecimento_autor.")</td>";
            echo "<td class='atributo_th'>".$pais_autor."</td>";
            echo "</tr>";
            echo "</table>";
?>

            <br>
                <div class="forms">
                    <form  action='php/excluindo_autor.php' method='post' style="margin-top: 0px;">
                        <h2 style="color: black; text-align: center;">Excluir esse Autor?</h2><br>
                        <?php echo "<input type='text' name='excluindo' value='".$id_autor."' style='display: none;'>"; ?>
                        <input type='text' name='valor' value='id_autor' style='display: none;'>       
                        <button type='submit'>Sim</button><a href="livro_lista.php">Não</a>
                    </form><br>
                </div>     
                            
<?php
        }
    }
}

?>
    
    <br><br><br>
    <script src="../../js/modal_pop.js"></script>
    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
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