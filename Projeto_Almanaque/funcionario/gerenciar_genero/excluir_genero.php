<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
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
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Excluir Categoria</title>
    <style>
        .bnt_n a{
            background-color: #276daf;
            transition: all .50s ease;
            padding-left: 46.9%;
            padding-right: 48%;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .bnt_n a:hover{
            background-color:  #235d92;
        }

    @media screen and (max-width: 500px) {
        .bnt_n a{
            padding-left: 45%;
            padding-right: 45%;
        }
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

    <?php include('../../include/import_menu_genero_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Excluir</h1><br>

    <section class="containers" >
      <form  method="post" action="#" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Excluir Categoria/Gênero</h1><br>
        </div>

        <div class="input-box">
            <label>Selecione qual será Excluido</label>
            <select name="nome_genero" class="select-box">
                <option>Categoria/Gênero:</option>
                    <?php
                        include('../../include/conexao.php');

                            $sql2 = "SELECT * FROM genero";
                            $resultad2 = $mysqli->query($sql2);
                            while ($row2 = mysqli_fetch_array($resultad2))
                                {
                                    echo "<option value='".$row2['nome_genero']."'>".$row2['nome_genero']."</option>";
                                    
                                }
                    ?>
            </select>
        </div>
        <button type="submit">Excluir</button>
      </form>
    </section> <br>
        
    
    <?php
        @$nome_genero = $_POST['nome_genero'];
        if(isset($_POST['nome_genero'])){
    ?>

    <section class="containers" >
      <form  method="post" action="php/excluindo_genero.php" class="form" style="margin-top: 0px; text-align: center;">

        <div class="input-box">
          <h2 style="color: black; text-align: center;">Tem certeza que deseja deletar:  <span style="color: #276daf;"> <?php echo "".$nome_genero."?";?></span></h2>
        </div>

        <div class="input-box">
          <input type="text" name="nome_genero_confirmado" value="<?php echo $nome_genero; ?>" style="display: none;">
        </div>

        <button type="submit">Sim</button><br><br>
        <div class="bnt_n"><a href="genero_lista.php">Não</a></div>
      </form>
    </section>

        <?php
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