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
    <title>Adicionar Livro</title>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_livro_gerenciar.php'); ?>

    <br><br>
    
    <section class="containers" >
      <form  method="post" action="../../php/variaveis_livro.php" enctype="multipart/form-data" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Adicionar Livro</h1>
        </div>

        <div class="input-box">
          <label>Nome do Livro</label>
          <input name="nome_livro" type="text" placeholder="Digite o nome do livro" required>
        </div>

        <div class="column">
            <div class="input-box">
            <label>Autores <a href="../gerenciar_autor/adicionar_autor.php" style="color: #276daf;">(nenhuma das Opções)</a></label>
            <select name="name" class="select-box">
                    <option>Autores:</option>
                        <?php
                            include('../../include/conexao.php');

                            $sql = "SELECT * FROM autor";
                            $resultad = $mysqli->query($sql);
                                while ($row = mysqli_fetch_array($resultad))
                                    {
                                        echo "<option value='".$row['id_autor']."'>".$row['nome_autor']."</option>";
                                    }
                        ?>
                </select>
            </div>
                <div class="input-box">
                <label>Gênero <a href="../gerenciar_genero/adicionar_genero.php" style="color: #276daf;">(nenhuma das Opções)</a></label>
                <select name="id_genero" class="select-box">
                    <option>Gênero:</option>
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
            </div>
        </div>

        <div class="input-box">
          <label>Editora</label>
          <input name="editora_livro" type="text" placeholder="Digite o nome da editora" required>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Número da Edição</label>
            <input name="num_edicao_livro" type="number" placeholder="Digite o número da edição" required>
          </div>
          <div class="input-box">
            <label>Estoque</label>
            <input name="estoque_livro" type="number" placeholder="Digite o número de livros no estoque" required>
          </div>
        </div>
        
        <div class="input-box">
            <label>Sinopse</label>
            <input name="sinopse_livro" type="text" placeholder="Digite a sinopse do livro" required maxlength="999">
        </div>

        <div class="input-box">
            <label>Uploand da Capa do Livro</label>
            <input type="file" name="imagem" accept="image/*" style="border: none;" required >
        </div>

        <button type="submit">Cadastrar Livro</button>
      </form>
    </section>

    <br><br><br>

    <?php include('../../include/import_footer_gerenciar.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>