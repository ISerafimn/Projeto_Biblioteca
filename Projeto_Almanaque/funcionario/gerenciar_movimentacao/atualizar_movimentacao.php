<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    $caminho = $_SESSION['caminho'];
 
    if(isset($_SESSION['atualizar_por'])){
        $atualizar_por = $_SESSION['atualizar_por'];
    }
    if(isset($_SESSION['consultar'])){
        $consultar = $_SESSION['consultar'];
    }
    if(isset($_SESSION['id_usuario_movimentacao'])){
        $var = $_SESSION['id_usuario_movimentacao'];
        unset($_SESSION['id_usuario_movimentacao']);
    }
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
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Atualizar Movimentação</title>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

    <?php include('../../include/import_menu_movimentacao_gerenciar.php'); ?>
    
    <br>

    <h2 style="text-align: center; margin-bottom: 12px;">Digite para Atualizar</h2>

<form action="#" method="post">
    <div class="search-icon">
        <input type="text" placeholder="Pesquisar!" name="valor" required>
        <button type="submit" class="icon"><i class="ri-search-line"></i></button>
    </div>
</form>

<br>
<?php

if(isset($_POST['valor'])){
    $var = $_POST['valor'];
}

if (@$var == ""){
}
else{
?>
    <table>
        <tr>
            <th class="atributo_th">Nome do Usuário e ID</th>
            <th class="atributo_th">Nome do Livro</th>
            <th class="atributo_th">Data</th>
            <th class="atributo_th">Status e ID Movimentação</th>
        </tr>
    
<?php
    if($atualizar_por == "id_usuario"){
        if($caminho == 'saida'){
            $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$var' AND id_status_movimentacao = '4' AND id_status_movimentacao != '5'");
        }
        else{
            $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$var' AND id_status_movimentacao != '3' AND id_status_movimentacao != '4' AND id_status_movimentacao != '5'");
        }

        while ($result = mysqli_fetch_array($sql))
        
        { 
                    $id_status_movimentacao = $result['id_status_movimentacao'];
                    $id_movimentacao = $result['id_movimentacao'];
                    $id_usuario = $result['id_usuario'];
                    $id_livro = $result['id_livro'];
                    
                    $data_saida_movimentacao = $result['data_saida_movimentacao'];
                    $data_limite_movimentacao = $result['data_limite_movimentacao'];
                    $data_volta_movimentacao = $result['data_volta_movimentacao'];

                    $icon = "";
                    if($data_saida_movimentacao == ""){
                        $icon = " - ";
                    }else{
                        $icon = " Até ";
                    }
                    $icon2 = "";
                    if($data_volta_movimentacao != ""){
                        $icon2 = "<br> entregue: ";
                    }

                        $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                        $resultad2 = $mysqli->query($sql2);
                    
                        while ($row = mysqli_fetch_array($resultad2))
                        { 
                            echo "<tr><td class='atributo_td'><form method='post' action='movimentacao_aberto.php'>
                            <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                                <button type='submit' name='Submit' style='border: none; background-color: transparent; color: #fff; cursor: pointer; '>
                                    ".$row['nome_usuario']." (".$id_usuario.")
                                </button>
                            </form></td>";
                        }
                        
                        $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                        $resultad3 = $mysqli->query($sql3);
                    
                        while ($row3 = mysqli_fetch_array($resultad3))
                        { 
                            echo "<td class='atributo_td'>".$row3['nome_livro']."</td>";
                        }

                        echo "<td class='atributo_th'>".$data_saida_movimentacao, $icon, $data_limite_movimentacao, $icon2, $data_volta_movimentacao."</td>";

                        $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                        $resultad4 = $mysqli->query($sql4);
                    
                        while ($row4 = mysqli_fetch_array($resultad4))
                        { 
                        
                            echo "<td class='atributo_td'>".$row4['nome_status_movimentacao']." (".$id_movimentacao.")</td></tr>";
                        }
        }
        if($caminho == 'saida')
        {
?>
    </table><br>

    <section class="containers" >
      <form  method="post" action="php/variaveis_atualizando_movimentacao.php" class="form" style="margin-top: 0px;">

        <div class="input-box">
          <h1 style="color: black; text-align: center;">Saída de Livros</h1>
        </div>

        <div class="input-box">
            <label>Selecione o livro que está saindo</label>
            <select name="id_movimentacao" class="select-box">
                <option>Livros:</option>
                    <?php
                            $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario' AND id_status_movimentacao = '4' AND id_status_movimentacao != '5'";
                            $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {   
                                    $id_livro2 = $row['id_livro'];
                                    $id_movimentacao = $row['id_movimentacao'];

                                    $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                    $resultad2 = $mysqli->query($sql2);
                                    while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                    echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."(".$id_movimentacao.")</option>";
                                }
                    ?>
            </select>
        </div>
        <div class="input-box">
            <label>Selecione a limite de retorno do livro</label>
            <input name="data_limite_movimentacao" type="date" placeholder="Selecione a data limite" required>
        </div>
        <input type="number" name="id_status_movimentacao" value="1" style="display: none;">
        <input type="number" name="estoque_livro" value="1" style="display: none;">

        <button type="submit">Livro Entregue</button>
      </form>
    </section>

<?php

        }
        else{
            ?>
        </table><br>

        <section class="containers" >
        <form  method="post" action="php/variaveis_atualizando_movimentacao.php" class="form" style="margin-top: 0px;">

            <div class="input-box">
            <h1 style="color: black; text-align: center;">Volta dos Livros</h1>
            </div>

            <div class="input-box">
                <label>Selecione o livro que está voltando</label>
                <select name="id_movimentacao" class="select-box">
                    <option>Livros:</option>
                    <?php
                        $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario' AND id_status_movimentacao != '3' AND id_status_movimentacao != '4' AND id_status_movimentacao != '5'";
                        $resultad = $mysqli->query($sql);
                            while ($row = mysqli_fetch_array($resultad))
                                {   
                                    $id_movimentacao = $row['id_movimentacao'];
                                    $id_livro2 = $row['id_livro'];

                                    $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                    $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                            $nome_livro = $row2['nome_livro'];
                                        }
                                        
                                    echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."(".$id_movimentacao.")</option>";
                                }
                        ?>
                </select>
            </div>

            <input type="number" name="id_status_movimentacao" value="3" style="display: none;">
            <input type="number" name="estoque_livro" value="1" style="display: none;">

            <button type="submit">Livro Retornado</button>
        </form>
        </section>

        <?php
        }
    }
    else{

        $sql = "SELECT * FROM usuario nome_usuario WHERE nome_usuario LIKE '%$var%'";
        $result2 = $mysqli->query($sql);
        
        while ($row = mysqli_fetch_array($result2))
        { 
            $id_usuario = $row['id_usuario'];

            if($caminho == 'saida'){
                $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$id_usuario' AND id_status_movimentacao = '4'  AND id_status_movimentacao != '5'");
            }
            else{
                $sql = mysqli_query($mysqli, "SELECT  *   FROM  Movimentacao id_usuario WHERE id_usuario = '$id_usuario' AND id_status_movimentacao != '3' AND id_status_movimentacao != '4' AND id_status_movimentacao != '5'");
            }

            while ($result = mysqli_fetch_array($sql))
            
            { 
                        $id_movimentacao = $result['id_movimentacao'];
                        $id_usuario = $result['id_usuario'];
                        $id_livro = $result['id_livro'];
                        $id_status_movimentacao = $result['id_status_movimentacao'];
                        $data_saida_movimentacao = $result['data_saida_movimentacao'];
                        $data_limite_movimentacao = $result['data_limite_movimentacao'];
                        $data_volta_movimentacao = $result['data_volta_movimentacao'];
    
                        $icon = "";
                        if($data_saida_movimentacao == ""){
                            $icon = " - ";
                        }else{
                            $icon = " Até ";
                        }
                        $icon2 = "";
                        if($data_volta_movimentacao != ""){
                            $icon2 = "<br> entregue: ";
                        }
                        
                        $id_usuario2 = $id_usuario;

                            $sql2 = "SELECT * FROM usuario id_usuario WHERE id_usuario = '$id_usuario'";
                            $resultad2 = $mysqli->query($sql2);
                        
                            while ($row = mysqli_fetch_array($resultad2))
                            { 
                                echo "<tr><td class='atributo_td'><form method='post' action='movimentacao_aberto.php'>
                                <input name='id_movimentacao' value='".$id_movimentacao."' style='display: none;'>
                                    <button type='submit' name='Submit' style='border: none; background-color: transparent; color: #fff; cursor: pointer; '>
                                        ".$row['nome_usuario']." (".$id_usuario.")
                                    </button>
                                </form></td>";
                            }
                            
                            $sql3 = "SELECT * FROM livro id_livro WHERE id_livro = '$id_livro'";
                            $resultad3 = $mysqli->query($sql3);
                        
                            while ($row3 = mysqli_fetch_array($resultad3))
                            { 
                                echo "<td class='atributo_td'>".$row3['nome_livro']."</td>";
                            }
    
                            echo "<td class='atributo_th'>".$data_saida_movimentacao, $icon, $data_limite_movimentacao, $icon2, $data_volta_movimentacao."</td>";
    
                            $sql4 = "SELECT * FROM status_movimentacao id_status_movimentacao WHERE id_status_movimentacao = '$id_status_movimentacao'";
                            $resultad4 = $mysqli->query($sql4);
                        
                            while ($row4 = mysqli_fetch_array($resultad4))
                            { 
                            
                                echo "<td class='atributo_td'>".$row4['nome_status_movimentacao']." (".$id_movimentacao.")</td></tr>";
                            }
            }
        }
        if($caminho == 'saida')
        {
        ?>

        </table><br>

        <section class="containers" >
        <form  method="post" action="php/variaveis_atualizando_movimentacao.php" class="form" style="margin-top: 0px;">

            <div class="input-box">
            <h1 style="color: black; text-align: center;">Saída de Livros</h1>
            </div>

            <div class="input-box">
                <label>Selecione o livro que está saindo</label>
                <select name="id_movimentacao" class="select-box">
                    <option>Livros:</option>
                        <?php
                                $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario2' AND id_status_movimentacao = '4' AND id_status_movimentacao != '5'";
                                $resultad = $mysqli->query($sql);
                                while ($row = mysqli_fetch_array($resultad))
                                    {   
                                        $id_livro2 = $row['id_livro'];
                                        $id_movimentacao = $row['id_movimentacao'];

                                        $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                                        $resultad2 = $mysqli->query($sql2);
                                        while ($row2 = mysqli_fetch_array($resultad2)){
                                                $nome_livro = $row2['nome_livro'];
                                            }
                                            
                                        echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."(".$id_movimentacao.")</option>";
                                    }
                        ?>
                </select>
            </div>
            <div class="input-box">
                <label>Selecione a limite de retorno do livro</label>
                <input name="data_limite_movimentacao" type="date" placeholder="Selecione a data limite" required>
            </div>
            <input type="number" name="id_status_movimentacao" value="1" style="display: none;">
            <input type="number" name="estoque_livro" value="1" style="display: none;">

            <button type="submit">Livro Entregue</button>
        </form>
        </section>

<?php
        }
        else{
            ?>
                    </table><br>

<section class="containers" >
<form  method="post" action="php/variaveis_atualizando_movimentacao.php" class="form" style="margin-top: 0px;">

    <div class="input-box">
    <h1 style="color: black; text-align: center;">Volta dos Livros</h1>
    </div>

    <div class="input-box">
        <label>Selecione o livro que está voltando</label>
        <select name="id_movimentacao" class="select-box">
            <option>Livros:</option>
            <?php
                $sql = "SELECT * FROM movimentacao where id_usuario = '$id_usuario2' AND id_status_movimentacao != '3' AND id_status_movimentacao != '4'  AND id_status_movimentacao != '5'";
                $resultad = $mysqli->query($sql);
                    while ($row = mysqli_fetch_array($resultad))
                        {   
                            $id_movimentacao = $row['id_movimentacao'];
                            $id_livro2 = $row['id_livro'];

                            $sql2 = "SELECT * FROM livro where id_livro = '$id_livro2'";
                            $resultad2 = $mysqli->query($sql2);
                                while ($row2 = mysqli_fetch_array($resultad2)){
                                    $nome_livro = $row2['nome_livro'];
                                }
                                
                            echo "<option value='".$row['id_movimentacao']."'>".$nome_livro."(".$id_movimentacao.")</option>";
                        }
                ?>
        </select>
    </div>

    <input type="number" name="id_status_movimentacao" value="3" style="display: none;">
    <input type="number" name="estoque_livro" value="1" style="display: none;">

    <button type="submit">Livro Retornado</button>
</form>
</section>

        <?php
        }
    }
}
?>
</table>
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