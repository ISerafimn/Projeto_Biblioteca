<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {

    $atualizar = $_SESSION['atualizar_autor'];

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
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Atualizar Autor</title>
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

    <?php include('../../include/import_menu_autor_gerenciar.php'); ?><br>

    <h1 style="text-align: center;">Atualizar</h1><br>

    <p style="text-align: center; margin-bottom: 12px;">Digite para selecionar o Autor que será Atualizado</p>

    <form action="#" method="post">
        <div class="search-icon">
            <input type="text" placeholder="Pesquisar!" name="valor" required>
            <button type="submit" class="icon"><i class="ri-search-line"></i></button>
        </div>
    </form>

<br><br>
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
    if($atualizar == "id_autor"){

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

            echo "<tr>";
            echo "<td class='id_th'>".$id_autor."</td>";
            echo "<td class='atributo_th'>".$nome_autor." (".$nascimento_autor, $icon, $falecimento_autor.")</td>";
            echo "<td class='atributo_th'>".$pais_autor."</td>";
            echo "</tr>";
            echo "</table>";

?>

<br><br>

    <section class="containers" >
      <form  method="post" action="php/atualizando_autor.php" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <p style="color: black; text-align: center;">Digite as Informações Atualizadas</p><br>
        </div>

        <div class="input-box">
          <label>Nome do Autor</label>
          <input name="nome_autor" type="text" placeholder="Digite o nome do autor" required>
        </div>

        <div class="input-box">
          <label>Nacionalidade</label>
          <input name="pais_autor" type="text" placeholder="Digite o pais de nascimento" required>
        </div>

        <div class="input-box">
          <label>Data de Nascimento</label>
          <input name="nascimento_autor" type="number" placeholder="Digite ano de nascimento" required>
        </div>

        <div class="input-box">
          <label>Data de Falecimento(opcional)</label>
          <input name="falecimento_autor" type="number" placeholder="Digite ano de falecimento">
        </div>

        <div class="input-box">
          <input name="id_autor" type="number" style='display: none;' value="<?php echo $id_autor; ?>">
        </div>

        <button type="submit">Atualizar</button>
      </form>
    </section>
          
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

<br><br>

    <section class="containers" >
      <form  method="post" action="php/atualizando_autor.php" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Digite as Informações Atualizadas</h1><br>
        </div>

        <div class="input-box">
          <label>Nome do Autor</label>
          <input name="nome_autor" type="text" placeholder="Digite o nome do autor" required>
        </div>

        <div class="input-box">
          <label>Nacionalidade</label>
          <input name="pais_autor" type="text" placeholder="Digite o pais de nascimento" required>
        </div>

        <div class="input-box">
          <label>Data de Nascimento</label>
          <input name="nascimento_autor" type="number" placeholder="Digite ano de nascimento" required>
        </div>

        <div class="input-box">
          <label>Data de Falecimento(opcional)</label>
          <input name="falecimento_autor" type="number" placeholder="Digite ano de falecimento">
        </div>

        <div class="input-box">
          <input name="id_autor" type="number" style='display: none;' value="<?php echo $id_autor; ?>">
        </div>

        <button type="submit">Atualizar</button>
      </form>
    </section>

    <?php
        }
    }
}
?>
    
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