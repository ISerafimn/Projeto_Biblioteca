<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
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
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Atualizar Categoria</title>
    <style>
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

    <h1 style="text-align: center;">Atualizar</h1><br>

    <section class="containers" >
      <form  method="post" action="php/atualizando_genero.php" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Atualizar Categoria/Gênero</h1><br>
        </div>

        <div class="input-box">
            <label>Selecione qual será atualizado</label>
            <select name="id_genero" class="select-box">
                <option>Categoria/Gênero:</option>
                    <?php
                        include('../../include/conexao.php');

                            $sql2 = "SELECT * FROM genero";
                            $resultad2 = $mysqli->query($sql2);
                            while ($row2 = mysqli_fetch_array($resultad2))
                                {
                                    echo "<option value='".$row2['id_genero']."'>".$row2['nome_genero']."</option>";
                                }
                    ?>
            </select>
        </div>

        <div class="input-box">
          <label>Nome da Categoria/Gênero</label>
          <input name="nome_genero" type="text" placeholder="Digite o nome da Categoria/Gênero" required>
        </div>

        <button type="submit">Atualizar</button>
      </form>
    </section>

    <br><br><br>

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